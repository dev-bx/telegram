<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2025 Kubeev Ruslan
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
 * If you'd like to make sure that the webhook was set by you, you can specify secret data in the parameter *secret\_token*. If specified, the request will contain a header “X-Telegram-Bot-Api-Secret-Token” with the secret token as content.
 * @property string $url
 * HTTPS URL to send updates to. Use an empty string to remove webhook integration
 * @property Types\InputFile $certificate
 * Upload your public key certificate so that the root certificate in use can be checked. See our [self-signed guide](/bots/self-signed) for details.
 * @property string $ipAddress
 * The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS
 * @property int $maxConnections
 * The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to *40*. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.
 * @property string[] $allowedUpdates
 * A JSON-serialized list of the update types you want your bot to receive. For example, specify `["message", "edited_channel_post", "callback_query"]` to only receive updates of these types. See [Update](#update) for a complete list of available update types. Specify an empty list to receive all update types except *chat\_member*, *message\_reaction*, and *message\_reaction\_count* (default). If not specified, the previous setting will be used.  
Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.
 * @property bool $dropPendingUpdates
 * Pass *True* to drop all pending updates
 * @property string $secretToken
 * A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook request, 1-256 characters. Only characters `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed. The header is useful to ensure that the request comes from a webhook set by you.
 * @method Base\BaseType send(Api $gateway = null)
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
        ];
    }

    /**
    * @return string
    */

    public function getUrl(): mixed
    {
        return $this->getFieldValue('url');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setUrl(mixed $value): static
    {
        return $this->setFieldValue('url', $value);
    }

    /**
    * @return Types\InputFile
    */

    public function getCertificate(): mixed
    {
        return $this->getFieldValue('certificate');
    }

    /**
    * @param Types\InputFile $value
    * @return static
    */

    public function setCertificate(mixed $value): static
    {
        return $this->setFieldValue('certificate', $value);
    }

    /**
    * @return string
    */

    public function getIpAddress(): mixed
    {
        return $this->getFieldValue('ip_address');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setIpAddress(mixed $value): static
    {
        return $this->setFieldValue('ip_address', $value);
    }

    /**
    * @return int
    */

    public function getMaxConnections(): mixed
    {
        return $this->getFieldValue('max_connections');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setMaxConnections(mixed $value): static
    {
        return $this->setFieldValue('max_connections', $value);
    }

    /**
    * @return string[]
    */

    public function getAllowedUpdates(): mixed
    {
        return $this->getFieldValue('allowed_updates');
    }

    /**
    * @param string[] $value
    * @return static
    */

    public function setAllowedUpdates(mixed $value): static
    {
        return $this->setFieldValue('allowed_updates', $value);
    }

    /**
    * @return bool
    */

    public function getDropPendingUpdates(): mixed
    {
        return $this->getFieldValue('drop_pending_updates');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setDropPendingUpdates(mixed $value): static
    {
        return $this->setFieldValue('drop_pending_updates', $value);
    }

    /**
    * @return string
    */

    public function getSecretToken(): mixed
    {
        return $this->getFieldValue('secret_token');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setSecretToken(mixed $value): static
    {
        return $this->setFieldValue('secret_token', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetWebhook';
    }
}