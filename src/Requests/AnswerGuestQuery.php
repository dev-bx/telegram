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
 * Use this method to reply to a received guest message. On success, a [SentGuestMessage](#sentguestmessage) object is returned.
 * @property string $guestQueryId
 * Unique identifier for the query to be answered
 * @property InlineMode\InlineQueryResult $result
 * A JSON-serialized object describing the message to be sent
 * @method Types\SentGuestMessage send(Api $gateway = null)
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
                'type' => Types\SentGuestMessage::class,
            ],
        ];
    }

    /**
    * @return string
    */

    public function getGuestQueryId(): mixed
    {
        return $this->getFieldValue('guest_query_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setGuestQueryId(mixed $value): static
    {
        return $this->setFieldValue('guest_query_id', $value);
    }

    /**
    * @return InlineMode\InlineQueryResult
    */

    public function getResult(): mixed
    {
        return $this->getFieldValue('result');
    }

    /**
    * @param InlineMode\InlineQueryResult $value
    * @return static
    */

    public function setResult(mixed $value): static
    {
        return $this->setFieldValue('result', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'AnswerGuestQuery';
    }
}