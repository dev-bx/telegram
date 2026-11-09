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
 * The query contains data signed by a TON wallet of the user who sent the query. The data is signed for the domain `bot<bot_id>`, where `<bot_id>` is the identifier of the bot.
 *
 * @link https://core.telegram.org/bots/api#widgetquerytypesigndata
 *
 * @property-read string|null $type Required. Type of the query, always “sign_data”
 * @property-write string $type
 * @property-read WidgetQueryWallet|null $wallet Required. The wallet that signed the data
 * @property-write WidgetQueryWallet|array<string, mixed> $wallet
 * @property-read string|null $signData Required. JSON-serialized signed data
 * @property-write string $signData
 */
class WidgetQueryTypeSignData extends WidgetQueryType
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
                'value' => 'sign_data',
                'required' => true,
            ],
            'wallet' => [
                'type' => [WidgetQueryWallet::class],
                'required' => true,
            ],
            'sign_data' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the query, always “sign_data”
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
     * Required. The wallet that signed the data
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
     * Required. JSON-serialized signed data
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSignData(): mixed
    {
        return $this->getFieldValue('sign_data');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSignData(mixed $value): static
    {
        return $this->setFieldValue('sign_data', $value);
    }
}
