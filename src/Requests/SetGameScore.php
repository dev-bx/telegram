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
use DevBX\Telegram\Types;

/**
 * Use this method to set the score of the specified user in a game message. On success, if the message is not an inline message, the `Message` is returned, otherwise *True* is returned. Returns an error, if the new score is not greater than the user's current score in the chat and *force* is *False*.
 *
 * @link https://core.telegram.org/bots/api#setgamescore
 *
 * @property-read int|null $userId Required. User identifier
 * @property-write int $userId
 * @property-read int|null $score Required. New score, must be non-negative
 * @property-write int $score
 * @property-read bool|null $force Optional. Pass *True* if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters.
 * @property-write bool $force
 * @property-read bool|null $disableEditMessage Optional. Pass *True* if the game message should not be automatically edited to include the current scoreboard
 * @property-write bool $disableEditMessage
 * @property-read int|null $chatId Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat.
 * @property-write int $chatId
 * @property-read int|null $messageId Optional. Required if *inline_message_id* is not specified. Identifier of the sent message.
 * @property-write int $messageId
 * @property-read string|null $inlineMessageId Optional. Required if *chat_id* and *message_id* are not specified. Identifier of the inline message.
 * @property-write string $inlineMessageId
 *
 * @method Types\Message|bool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
                'type' => [Types\Message::class],
                'canReturnBool' => true,
            ],
        ];
    }

    /**
     * Required. User identifier
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
     * Required. New score, must be non-negative
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getScore(): mixed
    {
        return $this->getFieldValue('score');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setScore(mixed $value): static
    {
        return $this->setFieldValue('score', $value);
    }

    /**
     * Optional. Pass *True* if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getForce(): mixed
    {
        return $this->getFieldValue('force');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setForce(mixed $value): static
    {
        return $this->setFieldValue('force', $value);
    }

    /**
     * Optional. Pass *True* if the game message should not be automatically edited to include the current scoreboard
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getDisableEditMessage(): mixed
    {
        return $this->getFieldValue('disable_edit_message');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDisableEditMessage(mixed $value): static
    {
        return $this->setFieldValue('disable_edit_message', $value);
    }

    /**
     * Optional. Required if *inline_message_id* is not specified. Unique identifier for the target chat.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
     * Optional. Required if *inline_message_id* is not specified. Identifier of the sent message.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMessageId(): mixed
    {
        return $this->getFieldValue('message_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageId(mixed $value): static
    {
        return $this->setFieldValue('message_id', $value);
    }

    /**
     * Optional. Required if *chat_id* and *message_id* are not specified. Identifier of the inline message.
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

    protected function getRequestMethod(): string
    {
        return 'setGameScore';
    }
}
