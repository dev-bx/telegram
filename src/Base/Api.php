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

    public function __construct(array $params = [])
    {
        $this->token = $params['token'];
        $this->apiUrl = $params['api_url'] ?? 'https://api.telegram.org/bot';
        $this->clientOptions = $params['client_options'] ?? [];
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
     * @param callable(array, BaseType|ArrayObject, BaseType): mixed $callback
     */
    public function setCallbackResponse(callable $callback)
    {
        $this->onResponse = $callback;


    }

    /**
     * @throws TelegramException
     */
    public function query($method, array $parameters = [], array|BaseType $structure = []): mixed
    {
        $returnClass = BaseType::class;
        $returnArrayClass = false;

        if ($structure['@return']) {
            if ($structure['isArray'] ?? false) {
                $returnClass = ArrayObject::class;
                $returnArrayClass = $structure['@return']['type'];
            } else {
                $returnClass = $structure['@return']['type'];
            }

            unset($structure['@return']);
        }

        $result = $returnClass::create([]);

        $queryClass = static::compileMethodQueryClass($method, $structure);

        $query = $queryClass::create($parameters);
        $query->validate();

        if (!$query->isSuccess())
        {
            $result->addErrors($query->getErrors());
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
                    return $result->addError(new Error(json_last_error_msg(), 'json_encode'));
                }
            }

            $postData[$key] = $value;
        }

        $response = $this->sendRequest($this->apiUrl.$this->token.'/'.$method, $postData, $result, $multipart);

        if (!$result->isSuccess())
            return $result;

        $response = json_decode($response, true);
        if ($response === null)
        {
            return $result->addError(new Error(json_last_error_msg(), 'json_decode'));
        }

        if ($this->onResponse)
        {
            if (call_user_func_array($this->onResponse,[&$response, &$result, $query]) === true)
            {
                return $result;
            }
        }

        if (!$response['ok'])
        {
            return $result->addError(new Error($response['description'], $response['error_code'], $response));
        }

        if ($returnArrayClass)
        {
            /* @var ArrayObject $result */

            foreach ($response['result'] as $item)
            {
                $result->add($item, true);
            }
        } else {
            $result->setEntityValue($response['result'], true);
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
            return $webhookUpdate->addError(new Error('Post data is empty'));
        }

        $postData = json_decode($postData, true);
        if ($postData === null)
        {
            return $webhookUpdate->addError(new Error(json_last_error_msg(), 'json_decode'));
        }

        $webhookUpdate->setEntityValue($postData, true);

        return $webhookUpdate;
    }

}

