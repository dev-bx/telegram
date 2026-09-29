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
 * @property string $chatJoinRequestQueryId
 * Unique identifier of the join request query
 * @property string $result
 * Result of the query. Must be either “approve” to allow the user to join the chat, “decline” to disallow the user to join the chat, or “queue” to leave the decision to other administrators.
 * @method Base\BaseType send(Api $gateway = null)
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
        ];
    }

    /**
    * @return string
    */

    public function getChatJoinRequestQueryId(): mixed
    {
        return $this->getFieldValue('chat_join_request_query_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setChatJoinRequestQueryId(mixed $value): static
    {
        return $this->setFieldValue('chat_join_request_query_id', $value);
    }

    /**
    * @return string
    */

    public function getResult(): mixed
    {
        return $this->getFieldValue('result');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setResult(mixed $value): static
    {
        return $this->setFieldValue('result', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'AnswerChatJoinRequestQuery';
    }
}