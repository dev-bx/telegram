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

namespace DevBX\Telegram\InlineMode;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;

/**
 * Represents a `InlineQueryResult` of an inline query that was chosen by the user and sent to their chat partner.
 *
 * **Note:** It is necessary to enable [inline feedback](https://core.telegram.org/bots/inline#collecting-feedback) via [@BotFather](https://t.me/botfather) in order to receive these objects in updates.
 *
 * @link https://core.telegram.org/bots/api#choseninlineresult
 *
 * @property-read string|null $resultId Required. The unique identifier for the result that was chosen
 * @property-write string $resultId
 * @property-read Types\User|null $from Required. The user that chose the result
 * @property-write Types\User|array<string, mixed> $from
 * @property-read Types\Location|null $location Optional. Sender location, only for bots that require user location
 * @property-write Types\Location|array<string, mixed> $location
 * @property-read string|null $inlineMessageId Optional. Identifier of the sent inline message. Available only if there is an `InlineKeyboardMarkup` attached to the message. Will be also received in `CallbackQuery` and can be used to [edit](https://core.telegram.org/bots/api#updating-messages) the message.
 * @property-write string $inlineMessageId
 * @property-read string|null $query Required. The query that was used to obtain the result
 * @property-write string $query
 */
class ChosenInlineResult extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'result_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'from' => [
                'type' => [Types\User::class],
                'required' => true,
            ],
            'location' => [
                'type' => [Types\Location::class],
            ],
            'inline_message_id' => [
                'type' => ['string'],
            ],
            'query' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The unique identifier for the result that was chosen
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getResultId(): mixed
    {
        return $this->getFieldValue('result_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setResultId(mixed $value): static
    {
        return $this->setFieldValue('result_id', $value);
    }

    /**
     * Required. The user that chose the result
     *
     * @return Types\User|null
     * @throws Base\TelegramException
     */
    public function getFrom(): mixed
    {
        return $this->getFieldValue('from');
    }

    /**
     * @param Types\User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFrom(mixed $value): static
    {
        return $this->setFieldValue('from', $value);
    }

    /**
     * Optional. Sender location, only for bots that require user location
     *
     * @return Types\Location|null
     * @throws Base\TelegramException
     */
    public function getLocation(): mixed
    {
        return $this->getFieldValue('location');
    }

    /**
     * @param Types\Location|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLocation(mixed $value): static
    {
        return $this->setFieldValue('location', $value);
    }

    /**
     * Optional. Identifier of the sent inline message. Available only if there is an `InlineKeyboardMarkup` attached to the message. Will be also received in `CallbackQuery` and can be used to [edit](https://core.telegram.org/bots/api#updating-messages) the message.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getInlineMessageId(): mixed
    {
        return $this->getFieldValue('inline_message_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInlineMessageId(mixed $value): static
    {
        return $this->setFieldValue('inline_message_id', $value);
    }

    /**
     * Required. The query that was used to obtain the result
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getQuery(): mixed
    {
        return $this->getFieldValue('query');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setQuery(mixed $value): static
    {
        return $this->setFieldValue('query', $value);
    }
}
