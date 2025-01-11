<?php

namespace DevBX\Telegram;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Stream;
use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Client\ClientInterface;

class GuzzleClient extends PsrClient {

    protected function getHttpClient(): ClientInterface
    {
        return new Client($this->clientOptions);
    }

    protected function createPsrRequest(string $method, string $url, array $headers, $body): RequestInterface
    {
        return new Request($method, $url, $headers, $body);
    }
}