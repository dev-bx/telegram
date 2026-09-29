<?php

namespace DevBX\Telegram\Base;

use DevBX\Telegram\Types;

/**
 * Базовый клиент Bot API: сборка и проверка запроса, разбор ответа. Транспорт — sendRequest() наследника.
 *
 * @phpstan-import-type FieldDefinitions from BaseType
 * @phpstan-import-type UploadFile from BaseType
 */
class Api
{
    protected string $token;
    protected string $apiUrl;
    /** @var array<string, mixed> Опции HTTP-клиента транспорта */
    protected array $clientOptions;

    /** @var callable|null function(string $method, BaseObject &$result, BaseType &$query): mixed — true прерывает запрос */
    protected $onBeforeRequest;
    /** @var callable|null function(array &$response, BaseObject &$result, BaseType $query, array $postData, bool $multipart): mixed */
    protected $onResponse;
    /** @var callable|null function(mixed $result): void */
    protected $onResult;

    /** @var Api|null */
    protected static $instance = null;

    /**
     * @param array{token?: string, api_url?: string, client_options?: array<string, mixed>} $params
     */
    public function __construct(array $params = [])
    {
        $this->token = $params['token'] ?? '';
        $this->apiUrl = $params['api_url'] ?? 'https://api.telegram.org/bot';
        $this->clientOptions = $params['client_options'] ?? [];
        static::$instance = $this;
    }

    /**
     * Последний созданный клиент (используется Request::send() без явного клиента).
     * Если клиента нет, вызывается функция devbx_telegram_init(), если она определена.
     */
    public static function getInstance(): static|null
    {
        if (!static::$instance)
        {
            if (function_exists('devbx_telegram_init'))
            {
                devbx_telegram_init();
            }
        }

        return static::$instance instanceof static ? static::$instance : null;
    }

    /**
     * Класс-запрос с заданными полями — для вызова query() с описанием параметров массивом.
     *
     * @param FieldDefinitions $structure
     * @return class-string<BaseType>
     * @throws TelegramException
     */
    public static function compileMethodQueryClass(string $method, array $structure)
    {
        if (!preg_match('#^[A-Za-z][A-Za-z0-9]*$#', $method)) {
            throw new TelegramException('Invalid method name "' . $method . '"');
        }

        $namespace = __NAMESPACE__.'\Methods';
        $className = $method.'Method';
        $fullClassName = $namespace . '\\' . $className;

        if (!class_exists($fullClassName)) {
            $eval = [];
            $eval[] = "namespace {$namespace};";
            $eval[] = "class $className extends \\".BaseType::class;
            $eval[] = "{";
            $eval[] = 'public static function getFields(): array';
            $eval[] = "{";
            $eval[] = "return ".var_export($structure, true).";";
            $eval[] = "}";
            $eval[] = "}";

            eval(implode("\n", $eval));
        }

        if (!is_a($fullClassName, BaseType::class, true)) {
            throw new TelegramException('Query class ' . $fullClassName . ' was not created');
        }

        return $fullClassName;
    }

    /**
     * Отправляет запрос. Реализуется транспортом; ошибки добавляются в $result.
     *
     * @param array<string, mixed> $params Параметры; файлы — массивы UploadFile
     * @return string|false Тело ответа или false при ошибке транспорта
     * @throws TelegramException
     */
    public function sendRequest(string $url, array $params, BaseObject $result, bool $multipart)
    {
        throw new TelegramException('sendRequest method not implemented');
    }

    /**
     * Sets the callback before request.
     *
     * @param callable(string, BaseObject, BaseType): mixed $callback
     * @return void
     */
    public function setOnBeforeRequest(callable $callback)
    {
        $this->onBeforeRequest = $callback;
    }

    /**
     * Sets the callback response.
     *
     * @param callable(array<mixed>, BaseObject, BaseType, array<string, mixed>, bool): mixed $callback
     * @return void
     */
    public function setCallbackResponse(callable $callback)
    {
        $this->onResponse = $callback;
    }

    /**
     * Sets the callback result.
     *
     * @param callable(mixed): void $callback
     * @return void
     */
    public function setCallbackResult(callable $callback)
    {
        $this->onResult = $callback;
    }

    /**
     * Выполняет метод Bot API.
     *
     * @param string $method Имя метода (sendMessage)
     * @param array<string, mixed> $parameters Параметры (если $structure — Request, берутся из него)
     * @param FieldDefinitions|BaseType $structure Описание параметров и '@return' или объект-запрос
     * @param array<string, Types\InputFile|UploadFile> $attachments Файлы для ссылок attach://<имя>
     * @return mixed Объект результата (тип из '@return'), ArrayObject для массивов, bool для «True»
     *               вместо объекта; при ошибке в нестрогом режиме — объект результата с ошибками
     * @throws TelegramException
     */
    public function query($method, array $parameters = [], array|BaseType $structure = [], array $attachments = []): mixed
    {
        $fields = $structure instanceof BaseType ? $structure::getFields() : $structure;

        $returnDefinition = $fields['@return'] ?? null;
        unset($fields['@return']);

        $returnTypes = BaseType::resolveFieldTypes($returnDefinition['type'] ?? []);
        $returnIsArray = (bool)($returnDefinition['isArray'] ?? false);
        $canReturnBool = $returnDefinition['canReturnBool'] ?? false;

        $result = $returnIsArray ? new ArrayObject($returnTypes) : ($returnTypes[0] ?? BaseType::class)::createEmpty();

        if ($structure instanceof Request) {
            $query = $structure;
        } else {
            $query = static::compileMethodQueryClass($method, $fields)::create($parameters);
        }

        $query->validate();

        if (!$query->isSuccess())
        {
            $result->addErrorsCollection($query->getErrorsCollection());
            return $result;
        }

        if ($this->onBeforeRequest)
        {
            if (call_user_func_array($this->onBeforeRequest, [$method, &$result, &$query]) === true)
            {
                return $result;
            }
        }

        $postData = $query->getEntityValue();
        $postData = is_array($postData) ? $postData : [];

        $multipart = false;

        foreach ($postData as $key=>$value) {
            if ($value instanceof Types\InputFile)
            {
                $postData[$key] = $value->getEntityValue();
                $multipart = true;
                continue;
            }

            if ($value instanceof \JsonSerializable) {
                $value = $value->jsonSerialize();
            }

            if (is_array($value))
            {
                $value = json_encode($value);
                if ($value === false)
                {
                    return $result->addErrorItem(new Error(json_last_error_msg(), 'json_encode'));
                }
            }

            $postData[$key] = $value;
        }

        foreach ($attachments as $key=>$value)
        {
            if (array_key_exists($key, $postData))
            {
                $result->addErrorItem(new Error('Attachment "'.$key.'" conflict with post values'));
                continue;
            }

            $postData[$key] = $value instanceof Types\InputFile ? $value->getEntityValue() : $value;
            $multipart = true;
        }

        $response = $this->sendRequest($this->apiUrl.$this->token.'/'.$method, $postData, $result, $multipart);

        if (!$result->isSuccess())
            return $result;

        if ($response === false)
        {
            return $result->addErrorItem(new Error('Empty response', 'transport'));
        }

        $response = json_decode($response, true);
        if (!is_array($response))
        {
            return $result->addErrorItem(new Error(json_last_error_msg(), 'json_decode'));
        }

        if ($this->onResponse)
        {
            if (call_user_func_array($this->onResponse,[&$response, &$result, $query, $postData, $multipart]) === true)
            {
                return $result;
            }
        }

        if (empty($response['ok']))
        {
            $description = $response['description'] ?? 'Unknown error';
            $errorCode = $response['error_code'] ?? 0;

            return $result->addErrorItem(new Error(
                is_string($description) ? $description : 'Unknown error',
                is_int($errorCode) || is_string($errorCode) ? $errorCode : 0,
                $response
            ));
        }

        $data = $response['result'] ?? null;

        if ($canReturnBool && is_bool($data))
        {
            return $data;
        }

        if ($result instanceof ArrayObject)
        {
            foreach (is_array($data) ? $data : [] as $item)
            {
                $result->add($item, true);
            }
        } elseif ($result instanceof BaseType) {
            // Фабрика типа: для объединения (ChatMember, MenuButton…) — подходящий вариант.
            $created = $result::create($data, true);
            if ($created !== null) {
                $result = $created;
            }
        }

        if ($this->onResult)
        {
            call_user_func_array($this->onResult, [$result]);
        }

        return $result;
    }

    /**
     * Update из тела webhook-запроса (php://input). Результат кэшируется на время запроса.
     *
     * @throws TelegramException
     */
    public static function getWebhookUpdate(): Types\Update
    {
        static $webhookUpdate = null;

        if ($webhookUpdate instanceof Types\Update)
            return $webhookUpdate;

        $webhookUpdate = Types\Update::create();

        $postData = file_get_contents('php://input');
        if (empty($postData))
        {
            return $webhookUpdate->addErrorItem(new Error('Post data is empty'));
        }

        $postData = json_decode($postData, true);
        if ($postData === null)
        {
            return $webhookUpdate->addErrorItem(new Error(json_last_error_msg(), 'json_decode'));
        }

        $webhookUpdate->setEntityValue($postData, true);

        return $webhookUpdate;
    }

    public static function escapeMarkdownV2(string $text): string {
        return addcslashes($text, '_*[]()~`>#+=|{}.!-');
    }

}
