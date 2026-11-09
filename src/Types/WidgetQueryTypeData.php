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
 * The query contains data for the bot.
 *
 * @link https://core.telegram.org/bots/api#widgetquerytypedata
 *
 * @property-read string|null $type Required. Type of the query, always “data”
 * @property-write string $type
 * @property-read TonWalletCard|null $walletCard Optional. TON wallet card of the user who sent the query, if it was sent to the bot along with the query
 * @property-write TonWalletCard|array<string, mixed> $walletCard
 */
class WidgetQueryTypeData extends WidgetQueryType
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
                'value' => 'data',
                'required' => true,
            ],
            'wallet_card' => [
                'type' => [TonWalletCard::class],
            ],
        ];
    }

    /**
     * Required. Type of the query, always “data”
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
     * Optional. TON wallet card of the user who sent the query, if it was sent to the bot along with the query
     *
     * @return TonWalletCard|null
     * @throws Base\TelegramException
     */
    public function getWalletCard(): mixed
    {
        return $this->getFieldValue('wallet_card');
    }

    /**
     * @param TonWalletCard|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWalletCard(mixed $value): static
    {
        return $this->setFieldValue('wallet_card', $value);
    }
}
