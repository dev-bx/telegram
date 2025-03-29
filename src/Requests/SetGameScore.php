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
use DevBX\Telegram\Types;

/**
 * Use this method to set the score of the specified user in a game message. On success, if the message is not an inline message, the [Message](#message) is returned, otherwise *True* is returned. Returns an error, if the new score is not greater than the user's current score in the chat and *force* is *False*.
 * @property int $userId
 * User identifier
 * @property int $score
 * New score, must be non-negative
 * @property bool $force
 * Pass *True* if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
 * @property bool $disableEditMessage
 * Pass *True* if the game message should not be automatically edited to include the current scoreboard
 * @property int $chatId
 * Required if *inline\_message\_id* is not specified. Unique identifier for the target chat
 * @property int $messageId
 * Required if *inline\_message\_id* is not specified. Identifier of the sent message
 * @property string $inlineMessageId
 * Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
 * @method Types\Message|bool send(Api $gateway = null)
 */
class SetGameScore extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'score' => [
                'type' => ['int'],
                'required' => true,
            ],
            'force' => [
                'type' => ['bool'],
            ],
            'disable_edit_message' => [
                'type' => ['bool'],
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
                'type' => Types\Message::class,
                'canReturnBool' => true,
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

    public function getScore(): mixed
    {
        return $this->getFieldValue('score');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setScore(mixed $value): static
    {
        return $this->setFieldValue('score', $value);
    }

    /**
    * @return bool
    */

    public function getForce(): mixed
    {
        return $this->getFieldValue('force');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setForce(mixed $value): static
    {
        return $this->setFieldValue('force', $value);
    }

    /**
    * @return bool
    */

    public function getDisableEditMessage(): mixed
    {
        return $this->getFieldValue('disable_edit_message');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setDisableEditMessage(mixed $value): static
    {
        return $this->setFieldValue('disable_edit_message', $value);
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
        return 'SetGameScore';
    }
}