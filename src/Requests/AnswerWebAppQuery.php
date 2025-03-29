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
use DevBX\Telegram\InlineMode;

/**
 * Use this method to set the result of an interaction with a [Web App](/bots/webapps) and send a corresponding message on behalf of the user to the chat from which the query originated. On success, a [SentWebAppMessage](#sentwebappmessage) object is returned.
 * @property string $webAppQueryId
 * Unique identifier for the query to be answered
 * @property InlineMode\InlineQueryResult $result
 * A JSON-serialized object describing the message to be sent
 * @method InlineMode\SentWebAppMessage send(Api $gateway = null)
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
                'type' => InlineMode\SentWebAppMessage::class,
            ],
        ];
    }

    /**
    * @return string
    */

    public function getWebAppQueryId(): mixed
    {
        return $this->getFieldValue('web_app_query_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setWebAppQueryId(mixed $value): static
    {
        return $this->setFieldValue('web_app_query_id', $value);
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
        return 'AnswerWebAppQuery';
    }
}