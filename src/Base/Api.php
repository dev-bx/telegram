<?php

namespace DevBX\Telegram\Base;

use DevBX\Telegram\Types;

class Api
{
    protected string $token;
    protected string $apiUrl;
    protected array $clientOptions;

    protected $onBeforeRequest;
    protected $onResponse;
    protected $onResult;

    protected static $instance = null;

    public function __construct(array $params = [])
    {
        $this->token = $params['token'];
        $this->apiUrl = $params['api_url'] ?? 'https://api.telegram.org/bot';
        $this->clientOptions = $params['client_options'] ?? [];
        static::$instance = $this;
    }

    public static function getInstance(): static|null
    {
        if (!static::$instance)
        {
            if (function_exists('devbx_telegram_init'))
            {
                /** @noinspection PhpUndefinedFunctionInspection */
                devbx_telegram_init();
            }
        }

        return static::$instance;
    }

    /**
     * @param $method
     * @param array $structure
     * @return string|BaseType
     */
    public static function compileMethodQueryClass($method, array $structure)
    {
        $namespace = __NAMESPACE__.'\Methods';
        $className = $method.'Method';
        $fullClassName = $namespace . '\\' . $className;

        if (class_exists($fullClassName)) {
            return $fullClassName;
        }

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

        return $fullClassName;
    }

    public function sendRequest(string $url, array $params, BaseType $result, bool $multipart)
    {
        throw new TelegramException('sendRequest method not implemented');
    }

    /**
     * Sets the callback before request.
     *
     * @param callable(string, BaseType|ArrayObject, BaseType): mixed $callback
     */

    public function setOnBeforeRequest(callable $callback)
    {
        $this->onBeforeRequest = $callback;
    }

    /**
     * Sets the callback response.
     *
     * @param callable(array, BaseType|ArrayObject, BaseType, array, array, array|null): mixed $callback
     */
    public function setCallbackResponse(callable $callback)
    {
        $this->onResponse = $callback;
    }

    /**
     * Sets the callback result.
     *
     * @param callable(mixed):void $callback
     */
    public function setCallbackResult(callable $callback)
    {
        $this->onResult = $callback;
    }

    /**
     * @param $method
     * @param array $parameters
     * @param array|BaseType $structure
     * @param Types\InputFile|array[] $attachments
     * @return mixed
     * @throws TelegramException
     */
    public function query($method, array $parameters = [], array|BaseType $structure = [], array $attachments = []): mixed
    {
        $returnType = BaseType::class;
        $returnIsArray = false;
        $canReturnBool = false;

        if ($structure instanceof BaseType) {
            $structure = $structure::getFields();
        }

        if ($structure['@return']) {
            $returnType = $structure['@return']['type'];
            $returnIsArray = $structure['@return']['isArray'] ?? false;
            $canReturnBool = $structure['@return']['canReturnBool'] ?? false;

            if ($returnIsArray) {
                $result = new ArrayObject($returnType);
            } else {
                /* @var BaseType $returnType */

                $result = $returnType::create([]);
            }

            unset($structure['@return']);
        } else {
            $result = BaseType::create([]);
        }

        $queryClass = static::compileMethodQueryClass($method, $structure);

        $query = $queryClass::create($parameters);
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
                $result->add(new \Bitrix\Main\Error('Attachment "'.$key.'" conflict with post values'));
                continue;
            }

            if ($value instanceof Types\InputFile)
            {
                $postData[$key] = $value->getEntityValue();
                $multipart = true;
            } elseif (Types\InputFile::isCompatible($value))
            {
                $postData[$key] = $value;
                $multipart = true;
            }
        }

        $response = $this->sendRequest($this->apiUrl.$this->token.'/'.$method, $postData, $result, $multipart);

        if (!$result->isSuccess())
            return $result;

        $response = json_decode($response, true);
        if ($response === null)
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

        if (!$response['ok'])
        {
            return $result->addErrorItem(new Error($response['description'], $response['error_code'], $response));
        }

        if ($canReturnBool && is_bool($response['result']))
        {
            return $response['result'];
        }

        if ($returnIsArray)
        {
            /* @var ArrayObject $result */

            foreach ($response['result'] as $item)
            {
                $result->add($item, true);
            }
        } else {
            $result->setEntityValue($response['result'], true);
        }

        if ($this->onResult)
        {
            call_user_func_array($this->onResult, [$result]);
        }

        return $result;
    }

    public static function getWebhookUpdate(): Types\Update
    {
        static $webhookUpdate = null;

        if ($webhookUpdate)
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

}

