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

/**
 * Use this method to process a received chat join request query. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#answerchatjoinrequestquery
 *
 * @property-read string|null $chatJoinRequestQueryId Required. Unique identifier of the join request query
 * @property-write string $chatJoinRequestQueryId
 * @property-read string|null $result Required. Result of the query. Must be either “approve” to allow the user to join the chat, “decline” to disallow the user to join the chat, or “queue” to leave the decision to other administrators.
 * @property-write string $result
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class AnswerChatJoinRequestQuery extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_join_request_query_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'result' => [
                'type' => ['string'],
                'required' => true,
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the join request query
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getChatJoinRequestQueryId(): mixed
    {
        return $this->getFieldValue('chat_join_request_query_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatJoinRequestQueryId(mixed $value): static
    {
        return $this->setFieldValue('chat_join_request_query_id', $value);
    }

    /**
     * Required. Result of the query. Must be either “approve” to allow the user to join the chat, “decline” to disallow the user to join the chat, or “queue” to leave the decision to other administrators.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getResult(): mixed
    {
        return $this->getFieldValue('result');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setResult(mixed $value): static
    {
        return $this->setFieldValue('result', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'answerChatJoinRequestQuery';
    }
}
