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
use DevBX\Telegram\Games;

/**
 * Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. Returns an Array of [GameHighScore](#gamehighscore) objects.
 * @property int $userId
 * Target user id
 * @property int $chatId
 * Required if *inline\_message\_id* is not specified. Unique identifier for the target chat
 * @property int $messageId
 * Required if *inline\_message\_id* is not specified. Identifier of the sent message
 * @property string $inlineMessageId
 * Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
 * @method Games\GameHighScore[]|Base\BaseType send(Api $gateway = null)
 */
class GetGameHighScores extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'chat_id' => [
                'type' => ['int'],
            ],
            'message_id' => [
                'type' => ['int'],
            ],
            'inline_message_id' => [
                'type' => ['string'],
            ],
            '@return' => [
                'type' => Games\GameHighScore::class,
                'isArray' => true,
            ],
        ];
    }

    /**
    * @return int
    */

    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
    * @return int
    */

    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
    * @return int
    */

    public function getMessageId(): mixed
    {
        return $this->getFieldValue('message_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setMessageId(mixed $value): static
    {
        return $this->setFieldValue('message_id', $value);
    }

    /**
    * @return string
    */

    public function getInlineMessageId(): mixed
    {
        return $this->getFieldValue('inline_message_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setInlineMessageId(mixed $value): static
    {
        return $this->setFieldValue('inline_message_id', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'GetGameHighScores';
    }
}