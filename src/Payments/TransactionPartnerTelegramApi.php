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

namespace DevBX\Telegram\Payments;

use DevBX\Telegram\Base;

/**
 * Describes a transaction with payment for [paid broadcasting](https://core.telegram.org/bots/api#paid-broadcasts).
 *
 * @link https://core.telegram.org/bots/api#transactionpartnertelegramapi
 *
 * @property-read string|null $type Required. Type of the transaction partner, always “telegram_api”
 * @property-write string $type
 * @property-read int|null $requestCount Required. The number of successful requests that exceeded regular limits and were therefore billed
 * @property-write int $requestCount
 */
class TransactionPartnerTelegramApi extends TransactionPartner
{
    /**
     * @return static
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [
            'type' => [
                'type' => ['string'],
                'value' => 'telegram_api',
                'required' => true,
            ],
            'request_count' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the transaction partner, always “telegram_api”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Required. The number of successful requests that exceeded regular limits and were therefore billed
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getRequestCount(): mixed
    {
        return $this->getFieldValue('request_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestCount(mixed $value): static
    {
        return $this->setFieldValue('request_count', $value);
    }
}
