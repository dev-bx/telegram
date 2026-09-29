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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 * Describes the current status of a webhook.
 *
 * @link https://core.telegram.org/bots/api#webhookinfo
 *
 * @property-read string|null $url Required. Webhook URL, may be empty if webhook is not set up
 * @property-write string $url
 * @property-read bool|null $hasCustomCertificate Required. *True*, if a custom certificate was provided for webhook certificate checks
 * @property-write bool $hasCustomCertificate
 * @property-read int|null $pendingUpdateCount Required. Number of updates awaiting delivery
 * @property-write int $pendingUpdateCount
 * @property-read string|null $ipAddress Optional. Currently used webhook IP address
 * @property-write string $ipAddress
 * @property-read int|null $lastErrorDate Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
 * @property-write int $lastErrorDate
 * @property-read string|null $lastErrorMessage Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
 * @property-write string $lastErrorMessage
 * @property-read int|null $lastSynchronizationErrorDate Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters
 * @property-write int $lastSynchronizationErrorDate
 * @property-read int|null $maxConnections Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
 * @property-write int $maxConnections
 * @property-read Base\ArrayObject<Base\ParameterString> $allowedUpdates Optional. A list of update types the bot is subscribed to. Defaults to all update types except *chat_member*, *message_reaction*, and *message_reaction_count*.
 * @property-write list<string>|Base\ArrayObject<Base\ParameterString> $allowedUpdates
 */
class WebhookInfo extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'url' => [
                'type' => ['string'],
                'required' => true,
            ],
            'has_custom_certificate' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'pending_update_count' => [
                'type' => ['int'],
                'required' => true,
            ],
            'ip_address' => [
                'type' => ['string'],
            ],
            'last_error_date' => [
                'type' => ['int'],
            ],
            'last_error_message' => [
                'type' => ['string'],
            ],
            'last_synchronization_error_date' => [
                'type' => ['int'],
            ],
            'max_connections' => [
                'type' => ['int'],
            ],
            'allowed_updates' => [
                'type' => ['string'],
                'isArray' => true,
            ],
        ];
    }

    /**
     * Required. Webhook URL, may be empty if webhook is not set up
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
     * Required. *True*, if a custom certificate was provided for webhook certificate checks
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasCustomCertificate(): mixed
    {
        return $this->getFieldValue('has_custom_certificate');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasCustomCertificate(mixed $value): static
    {
        return $this->setFieldValue('has_custom_certificate', $value);
    }

    /**
     * Required. Number of updates awaiting delivery
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPendingUpdateCount(): mixed
    {
        return $this->getFieldValue('pending_update_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPendingUpdateCount(mixed $value): static
    {
        return $this->setFieldValue('pending_update_count', $value);
    }

    /**
     * Optional. Currently used webhook IP address
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
     * Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getLastErrorDate(): mixed
    {
        return $this->getFieldValue('last_error_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLastErrorDate(mixed $value): static
    {
        return $this->setFieldValue('last_error_date', $value);
    }

    /**
     * Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getLastErrorMessage(): mixed
    {
        return $this->getFieldValue('last_error_message');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLastErrorMessage(mixed $value): static
    {
        return $this->setFieldValue('last_error_message', $value);
    }

    /**
     * Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getLastSynchronizationErrorDate(): mixed
    {
        return $this->getFieldValue('last_synchronization_error_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLastSynchronizationErrorDate(mixed $value): static
    {
        return $this->setFieldValue('last_synchronization_error_date', $value);
    }

    /**
     * Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
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
     * Optional. A list of update types the bot is subscribed to. Defaults to all update types except *chat_member*, *message_reaction*, and *message_reaction_count*.
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
}
