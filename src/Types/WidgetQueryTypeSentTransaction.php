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
 * The query notifies the bot about a transaction sent from a TON wallet of the user who sent the query.
 *
 * @link https://core.telegram.org/bots/api#widgetquerytypesenttransaction
 *
 * @property-read string|null $type Required. Type of the query, always “sent_transaction”
 * @property-write string $type
 * @property-read WidgetQueryWallet|null $wallet Required. The wallet from which the transaction was sent
 * @property-write WidgetQueryWallet|array<string, mixed> $wallet
 * @property-read string|null $msgHash Required. Value of *msg_hash* of the transaction
 * @property-write string $msgHash
 */
class WidgetQueryTypeSentTransaction extends WidgetQueryType
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
                'value' => 'sent_transaction',
                'required' => true,
            ],
            'wallet' => [
                'type' => [WidgetQueryWallet::class],
                'required' => true,
            ],
            'msg_hash' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the query, always “sent_transaction”
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
     * Required. The wallet from which the transaction was sent
     *
     * @return WidgetQueryWallet|null
     * @throws Base\TelegramException
     */
    public function getWallet(): mixed
    {
        return $this->getFieldValue('wallet');
    }

    /**
     * @param WidgetQueryWallet|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWallet(mixed $value): static
    {
        return $this->setFieldValue('wallet', $value);
    }

    /**
     * Required. Value of *msg_hash* of the transaction
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getMsgHash(): mixed
    {
        return $this->getFieldValue('msg_hash');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMsgHash(mixed $value): static
    {
        return $this->setFieldValue('msg_hash', $value);
    }
}
