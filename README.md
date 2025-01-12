# Telegram BOT API Library for PHP

This PHP library provides a convenient and easy-to-use interface for interacting with the Telegram BOT API. It is designed to be used with the Bitrix CMS or the GuzzleHTTP client.

## Features

- **Easy Integration**: Seamlessly integrates with Bitrix CMS and GuzzleHTTP client.
- **Full API Coverage**: Supports all <b>Telegram BOT API 8.2</b> methods.
- **Customizable**: Easily extendable and customizable to fit your specific needs.

## Installation

You can install the package via Composer:

```sh
composer require devbx/telegram
```

## Usage

### Bitrix CMS

```php
use DevBX\Telegram;

$client = new Telegram\BitrixClient([
    'token' => '1234567890:zzz',
    'client_options' => [ // Bitrix client options
        'disableSslVerification' => false
    ]
]);

$result = $client->sendPhoto([
    'chat_id' => 1234567890,
    'photo' => [
        'filename' => 'media.jpg',
        'resource' => fopen('media.jpg', 'r+'),
        'contentType' => 'image/jpeg',
    ],
]);

echo $result->messageId."\n";

foreach ($result->photo as $photo) {
    echo "File ID - {$photo->fileId}\nWidth - {$photo->width}\nHeight - {$photo->height}\nFile size - {$photo->fileSize}\n\n";
}

```

### Guzzle Http

```php

use DevBX\Telegram;

$client = new \DevBX\Telegram\GuzzleClient([
    'token' => '1234567890:zzz',
    'client_options' => [ // Guzzle client options
        'verify' => false
    ]
]);

$result = $client->sendPhoto([
    'chat_id' => 1234567890,
    'photo' => [
        'filename' => 'media.jpg',
        'resource' => fopen('media.jpg', 'r+'),
        'contentType' => 'image/jpeg',
    ],
]);

echo $result->messageId."\n";

foreach ($result->photo as $photo) {
    echo "File ID - {$photo->fileId}\nWidth - {$photo->width}\nHeight - {$photo->height}\nFile size - {$photo->fileSize}\n\n";
}


```

## Using a Local Bot API Server

### Bitrix
```php
$client = new Telegram\BitrixClient([
    'token' => '1234567890:zzz',
    'api_url' => 'http://localhost:8081/bot'
]);

$client->sendMessage([
    'chat_id' => '1234567890',
    'text' => 'message from Local Bot API Server'
]);
```

### Guzzle Http
```php
$client = new Telegram\GuzzleClient([
    'token' => '1234567890:zzz',
    'api_url' => 'http://localhost:8081/bot'
]);

$client->sendMessage([
    'chat_id' => '1234567890',
    'text' => 'message from Local Bot API Server'
]);
```