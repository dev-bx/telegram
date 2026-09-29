<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2026 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\Types;

/**
 * Use this method to specify a URL and receive incoming updates via an outgoing webhook. Whenever there is an update for the bot, we will send an HTTPS POST request to the specified URL, containing a JSON-serialized `Update`. In case of an unsuccessful request (a request with response [HTTP status code](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes) different from `2XY`), we will repeat the request and give up after a reasonable amount of attempts. Returns *True* on success.
 *
 * If you'd like to make sure that the webhook was set by you, you can specify secret data in the parameter *secret_token*. If specified, the request will contain a header “X-Telegram-Bot-Api-Secret-Token” with the secret token as content.
 *
 * **Notes**
 * **1.** You will not be able to receive updates using `getUpdates` for as long as an outgoing webhook is set up.
 * **2.** To use a self-signed certificate, you need to upload your [public key certificate](https://core.telegram.org/bots/self-signed) using *certificate* parameter. Please upload as InputFile, sending a String will not work.
 * **3.** Ports currently supported *for webhooks*: **443, 80, 88, 8443**.
 *
 * If you're having any trouble setting up webhooks, please check out this [amazing guide to webhooks](https://core.telegram.org/bots/webhooks).
 *
 * @link https://core.telegram.org/bots/api#setwebhook
 *
 * @property-read string|null $url Required. HTTPS URL to send updates to. Use an empty string to remove webhook integration.
 * @property-write string $url
 * @property-read array<string, mixed>|string|null $certificate Optional. Upload your public key certificate so that the root certificate in use can be checked. See our [self-signed guide](https://core.telegram.org/bots/self-signed) for details.
 * @property-write Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string} $certificate
 * @property-read string|null $ipAddress Optional. The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS
 * @property-write string $ipAddress
 * @property-read int|null $maxConnections Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to *40*. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.
 * @property-write int $maxConnections
 * @property-read Base\ArrayObject<Base\ParameterString> $allowedUpdates Optional. A JSON-serialized list of the update types you want your bot to receive. For example, specify `["message", "edited_channel_post", "callback_query"]` to only receive updates of these types. See `Update` for a complete list of available update types. Specify an empty list to receive all update types except *chat_member*, *message_reaction*, and *message_reaction_count* (default). If not specified, the previous setting will be used. Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.
 * @property-write list<string>|Base\ArrayObject<Base\ParameterString> $allowedUpdates
 * @property-read bool|null $dropPendingUpdates Optional. Pass *True* to drop all pending updates
 * @property-write bool $dropPendingUpdates
 * @property-read string|null $secretToken Optional. A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook request, 1-256 characters. Only characters `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed. The header is useful to ensure that the request comes from a webhook set by you.
 * @property-write string $secretToken
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SetWebhook extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'url' => [
                'type' => ['string'],
                'required' => true,
            ],
            'certificate' => [
                'type' => [Types\InputFile::class],
            ],
            'ip_address' => [
                'type' => ['string'],
            ],
            'max_connections' => [
                'type' => ['int'],
            ],
            'allowed_updates' => [
                'type' => ['string'],
                'isArray' => true,
            ],
            'drop_pending_updates' => [
                'type' => ['bool'],
            ],
            'secret_token' => [
                'type' => ['string'],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. HTTPS URL to send updates to. Use an empty string to remove webhook integration.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getUrl(): mixed
    {
        return $this->getFieldValue('url');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUrl(mixed $value): static
    {
        return $this->setFieldValue('url', $value);
    }

    /**
     * Optional. Upload your public key certificate so that the root certificate in use can be checked. See our [self-signed guide](https://core.telegram.org/bots/self-signed) for details.
     *
     * @return array<string, mixed>|string|null
     * @throws Base\TelegramException
     */
    public function getCertificate(): mixed
    {
        return $this->getFieldValue('certificate');
    }

    /**
     * @param Types\InputFile|array{filename?: string, content?: string, resource?: resource, contentType?: string} $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCertificate(mixed $value): static
    {
        return $this->setFieldValue('certificate', $value);
    }

    /**
     * Optional. The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getIpAddress(): mixed
    {
        return $this->getFieldValue('ip_address');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIpAddress(mixed $value): static
    {
        return $this->setFieldValue('ip_address', $value);
    }

    /**
     * Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to *40*. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMaxConnections(): mixed
    {
        return $this->getFieldValue('max_connections');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMaxConnections(mixed $value): static
    {
        return $this->setFieldValue('max_connections', $value);
    }

    /**
     * Optional. A JSON-serialized list of the update types you want your bot to receive. For example, specify `["message", "edited_channel_post", "callback_query"]` to only receive updates of these types. See `Update` for a complete list of available update types. Specify an empty list to receive all update types except *chat_member*, *message_reaction*, and *message_reaction_count* (default). If not specified, the previous setting will be used. Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.
     *
     * @return Base\ArrayObject<Base\ParameterString>
     * @throws Base\TelegramException
     */
    public function getAllowedUpdates(): mixed
    {
        return $this->getFieldValue('allowed_updates');
    }

    /**
     * @param list<string>|Base\ArrayObject<Base\ParameterString> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAllowedUpdates(mixed $value): static
    {
        return $this->setFieldValue('allowed_updates', $value);
    }

    /**
     * Optional. Pass *True* to drop all pending updates
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getDropPendingUpdates(): mixed
    {
        return $this->getFieldValue('drop_pending_updates');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDropPendingUpdates(mixed $value): static
    {
        return $this->setFieldValue('drop_pending_updates', $value);
    }

    /**
     * Optional. A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook request, 1-256 characters. Only characters `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed. The header is useful to ensure that the request comes from a webhook set by you.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSecretToken(): mixed
    {
        return $this->getFieldValue('secret_token');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSecretToken(mixed $value): static
    {
        return $this->setFieldValue('secret_token', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setWebhook';
    }
}
