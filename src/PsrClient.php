<?php

namespace DevBX\Telegram;

use DevBX\Telegram\Base\Error;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\NetworkExceptionInterface;

/**
 * Транспорт через любой PSR-18 клиент. Наследник реализует getHttpClient() и createPsrRequest().
 */
class PsrClient extends \DevBX\Telegram\Api
{
    protected function getHttpClient(): ClientInterface
    {
        // Этот метод должен быть переопределен в подклассе для предоставления конкретного HTTP-клиента
        throw new \Exception('Method getHttpClient() must be overridden');
    }

    /**
     * @param array<string, mixed> $params
     * @return string|false
     * @throws Base\TelegramException
     */
    public function sendRequest(string $url, array $params, Base\BaseObject $result, bool $multipart)
    {
        $client = $this->getHttpClient();
        $request = $this->createRequest($url, $params);

        try {
            $response = $client->sendRequest($request);
        } catch (NetworkExceptionInterface $e) {
            $result->addErrorItem(new Error('Network error: ' . $e->getMessage()));
            return false;
        } catch (ClientExceptionInterface $e) {
            $result->addErrorItem(new Error('Client error: ' . $e->getMessage()));
            return false;
        }

        if ($response->getStatusCode() < 200 || $response->getStatusCode() >= 300)
        {
            $result->addErrorItem(new Error('HTTP status code: ' . $response->getStatusCode()));
        }

        return (string)$response->getBody();
    }

    /**
     * @param array<string, mixed> $params
     */
    protected function createRequest(string $url, array $params): RequestInterface
    {
        $body = '';
        $headers = [];

        if ($this->isFormUrlEncoded($params)) {
            $body = http_build_query($params);
            $headers['Content-Type'] = 'application/x-www-form-urlencoded';
        } elseif ($this->hasFiles($params)) {
            $body = $this->buildMultipartFormData($params);
            $headers['Content-Type'] = 'multipart/form-data; boundary=' . $this->getBoundary();
        } else {
            $body = json_encode($params, JSON_THROW_ON_ERROR);
            $headers['Content-Type'] = 'application/json';
        }

        $request = $this->createPsrRequest('POST', $url, $headers, $body);

        return $request;
    }

    /**
     * @param array<string, mixed> $params
     */
    protected function isFormUrlEncoded(array $params): bool
    {
        foreach ($params as $param) {
            if (is_array($param)) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param array<string, mixed> $params
     */
    protected function hasFiles(array $params): bool
    {
        foreach ($params as $param) {
            if (is_array($param) && (isset($param['content']) || isset($param['resource']))) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param array<string, mixed> $params
     * @return resource
     */
    protected function buildMultipartFormData(array $params)
    {
        $boundary = $this->getBoundary();

        $stream = fopen('php://temp', 'w+');
        if ($stream === false) {
            throw new \RuntimeException('Cannot open php://temp for multipart body');
        }

        foreach ($params as $key => $param) {
            if (is_array($param) && (isset($param['content']) || isset($param['resource']))) {

                $filename = is_string($param['filename'] ?? null) ? $param['filename'] : $key;
                $contentType = is_string($param['contentType'] ?? null) ? $param['contentType'] : 'application/octet-stream';

                $body = "--$boundary\r\n";
                $body .= "Content-Disposition: form-data; name=\"$key\"; filename=\"" . $filename . "\"\r\n";
                $body .= "Content-Type: " . $contentType . "\r\n\r\n";

                fwrite($stream, $body);

                if (is_string($param['content'] ?? null))
                {
                    fwrite($stream, $param['content']);
                } elseif (is_resource($param['resource'] ?? null)) {
                    fseek($param['resource'], 0);
                    stream_copy_to_stream($param['resource'], $stream);
                }

                fwrite($stream, "\r\n");
            } else {
                $body = "--$boundary\r\n";
                $body .= "Content-Disposition: form-data; name=\"$key\"\r\n\r\n";
                $body .= (is_array($param) ? json_encode($param, JSON_THROW_ON_ERROR) : self::scalarToString($param)) . "\r\n";

                fwrite($stream, $body);
            }
        }

        fwrite($stream, "--$boundary--\r\n");
        fseek($stream, 0);

        return $stream;
    }

    private static function scalarToString(mixed $value): string
    {
        return is_scalar($value) || $value instanceof \Stringable ? (string)$value : '';
    }

    /** @var string|null */
    protected $boundary;

    protected function getBoundary(): string
    {
        if ($this->boundary === null)
        {
            $this->boundary = 'DEVBX' . uniqid('', true);
        }

        return $this->boundary;
    }

    /**
     * @param array<string, string> $headers
     * @param string|resource $body
     */
    protected function createPsrRequest(string $method, string $url, array $headers, $body): RequestInterface
    {
        // Этот метод должен быть реализован для создания PSR-7 RequestInterface
        // В зависимости от используемой библиотеки (guzzlehttp/psr7 или nyholm/psr7)
        throw new \Exception('Method createPsrRequest() must be implemented');
    }

    /**
     * @return mixed
     */
    protected function parseResponse(ResponseInterface $response)
    {
        $body = (string) $response->getBody();
        $data = json_decode($body, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception('Invalid JSON response: ' . json_last_error_msg());
        }

        return $data;
    }
}