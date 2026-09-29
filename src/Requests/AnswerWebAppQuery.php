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
 * Use this method to set the result of an interaction with a [Web App](https://core.telegram.org/bots/webapps) and send a corresponding message on behalf of the user to the chat from which the query originated. On success, a `SentWebAppMessage` object is returned.
 *
 * @link https://core.telegram.org/bots/api#answerwebappquery
 *
 * @property-read string|null $webAppQueryId Required. Unique identifier for the query to be answered
 * @property-write string $webAppQueryId
 * @property-read InlineMode\InlineQueryResult|null $result Required. A JSON-serialized object describing the message to be sent
 * @property-write InlineMode\InlineQueryResult|array<string, mixed> $result
 *
 * @method Types\SentWebAppMessage send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class AnswerWebAppQuery extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'web_app_query_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'result' => [
                'type' => [InlineMode\InlineQueryResult::class],
                'required' => true,
            ],
            '@return' => [
                'type' => [Types\SentWebAppMessage::class],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the query to be answered
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getWebAppQueryId(): mixed
    {
        return $this->getFieldValue('web_app_query_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWebAppQueryId(mixed $value): static
    {
        return $this->setFieldValue('web_app_query_id', $value);
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
        return 'answerWebAppQuery';
    }
}
