<?php

namespace DevBX\Telegram;

use DevBX\Telegram\Base\Error;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\NetworkExceptionInterface;

class PsrClient extends \DevBX\Telegram\Api
{
    protected function getHttpClient(): ClientInterface
    {
        // Этот метод должен быть переопределен в подклассе для предоставления конкретного HTTP-клиента
        throw new \Exception('Method getHttpClient() must be overridden');
    }

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

        if (!str_starts_with($response->getStatusCode(), '2'))
        {
            $result->addErrorItem(new Error('HTTP status code: ' . $response->getStatusCode()));
        }

        return (string)$response->getBody();
    }

    protected function createRequest($url, array $params): RequestInterface
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
            $body = json_encode($params);
            $headers['Content-Type'] = 'application/json';
        }

        $request = $this->createPsrRequest('POST', $url, $headers, $body);

        return $request;
    }

    protected function isFormUrlEncoded(array $params): bool
    {
        foreach ($params as $param) {
            if (is_array($param)) {
                return false;
            }
        }
        return true;
    }

    protected function hasFiles(array $params): bool
    {
        foreach ($params as $param) {
            if (is_array($param) && isset($param['content']) || isset($param['resource'])) {
                return true;
            }
        }
        return false;
    }

    protected function buildMultipartFormData(array $params)
    {
        $boundary = $this->getBoundary();

        $stream = fopen('php://temp', 'w+');

        foreach ($params as $key => $param) {
            if (is_array($param) && (isset($param['content']) || isset($param['resource']))) {

                $filename = $param['filename'] ?? $key;

                $body = "--$boundary\r\n";
                $body .= "Content-Disposition: form-data; name=\"$key\"; filename=\"" . $filename . "\"\r\n";
                $body .= "Content-Type: " . ($param['contentType'] ?? 'application/octet-stream') . "\r\n\r\n";

                fwrite($stream, $body);

                if (isset($param['content']))
                {
                    fwrite($stream, $param['content']);
                } else {
                    fseek($param['resource'], 0);
                    while (!feof($param['resource']))
                    {
                        fwrite($stream, stream_get_contents($param['resource'], 8192*10));
                    }
                }

                fwrite($stream, "\r\n");
            } else {
                $body = "--$boundary\r\n";
                $body .= "Content-Disposition: form-data; name=\"$key\"\r\n\r\n";
                $body .= is_array($param) ? json_encode($param) : $param . "\r\n";

                fwrite($stream, $body);
            }
        }

        fwrite($stream, "--$boundary--\r\n");
        fseek($stream, 0);

        return $stream;
    }

    protected $boundary;

    protected function getBoundary(): string
    {
        if ($this->boundary === null)
        {
            $this->boundary = 'DEVBX' . uniqid('', true);
        }

        return $this->boundary;
    }

    protected function createPsrRequest(string $method, string $url, array $headers, $body): RequestInterface
    {
        // Этот метод должен быть реализован для создания PSR-7 RequestInterface
        // В зависимости от используемой библиотеки (guzzlehttp/psr7 или nyholm/psr7)
        throw new \Exception('Method createPsrRequest() must be implemented');
    }

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