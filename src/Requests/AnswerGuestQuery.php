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
use DevBX\Telegram\InlineMode;
use DevBX\Telegram\Types;

/**
 * Use this method to reply to a received guest message. On success, a `SentGuestMessage` object is returned.
 *
 * @link https://core.telegram.org/bots/api#answerguestquery
 *
 * @property-read string|null $guestQueryId Required. Unique identifier for the query to be answered
 * @property-write string $guestQueryId
 * @property-read InlineMode\InlineQueryResult|null $result Required. A JSON-serialized object describing the message to be sent
 * @property-write InlineMode\InlineQueryResult|array<string, mixed> $result
 *
 * @method Types\SentGuestMessage send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class AnswerGuestQuery extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'guest_query_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'result' => [
                'type' => [InlineMode\InlineQueryResult::class],
                'required' => true,
            ],
            '@return' => [
                'type' => [Types\SentGuestMessage::class],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the query to be answered
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getGuestQueryId(): mixed
    {
        return $this->getFieldValue('guest_query_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGuestQueryId(mixed $value): static
    {
        return $this->setFieldValue('guest_query_id', $value);
    }

    /**
     * Required. A JSON-serialized object describing the message to be sent
     *
     * @return InlineMode\InlineQueryResult|null
     * @throws Base\TelegramException
     */
    public function getResult(): mixed
    {
        return $this->getFieldValue('result');
    }

    /**
     * @param InlineMode\InlineQueryResult|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setResult(mixed $value): static
    {
        return $this->setFieldValue('result', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'answerGuestQuery';
    }
}
