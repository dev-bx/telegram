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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 * This object represents an incoming callback query from a callback button in an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards). If the button that originated the query was attached to a message sent by the bot, the field *message* will be present. If the button was attached to a message sent via the bot (in [inline mode](https://core.telegram.org/bots/api#inline-mode)), the field *inline_message_id* will be present. Exactly one of the fields *data* or *game_short_name* will be present.
 *
 * **NOTE:** After the user presses a callback button, Telegram clients will display a progress bar until you call `answerCallbackQuery`. It is, therefore, necessary to react by calling `answerCallbackQuery` even if no notification to the user is needed (e.g., without specifying any of the optional parameters).
 *
 * @link https://core.telegram.org/bots/api#callbackquery
 *
 * @property-read string|null $id Required. Unique identifier for this query
 * @property-write string $id
 * @property-read User|null $from Required. Sender
 * @property-write User|array<string, mixed> $from
 * @property-read MaybeInaccessibleMessage|null $message Optional. Message sent by the bot with the callback button that originated the query
 * @property-write MaybeInaccessibleMessage|array<string, mixed> $message
 * @property-read string|null $inlineMessageId Optional. Identifier of the message sent via the bot in inline mode, that originated the query
 * @property-write string $inlineMessageId
 * @property-read string|null $chatInstance Required. Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in [games](https://core.telegram.org/bots/api#games).
 * @property-write string $chatInstance
 * @property-read string|null $data Optional. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
 * @property-write string $data
 * @property-read string|null $gameShortName Optional. Short name of a `Game` to be returned, serves as the unique identifier for the game
 * @property-write string $gameShortName
 */
class CallbackQuery extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'from' => [
                'type' => [User::class],
                'required' => true,
            ],
            'message' => [
                'type' => [MaybeInaccessibleMessage::class],
            ],
            'inline_message_id' => [
                'type' => ['string'],
            ],
            'chat_instance' => [
                'type' => ['string'],
                'required' => true,
            ],
            'data' => [
                'type' => ['string'],
            ],
            'game_short_name' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for this query
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Required. Sender
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getFrom(): mixed
    {
        return $this->getFieldValue('from');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFrom(mixed $value): static
    {
        return $this->setFieldValue('from', $value);
    }

    /**
     * Optional. Message sent by the bot with the callback button that originated the query
     *
     * @return MaybeInaccessibleMessage|null
     * @throws Base\TelegramException
     */
    public function getMessage(): mixed
    {
        return $this->getFieldValue('message');
    }

    /**
     * @param MaybeInaccessibleMessage|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessage(mixed $value): static
    {
        return $this->setFieldValue('message', $value);
    }

    /**
     * Optional. Identifier of the message sent via the bot in inline mode, that originated the query
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
     * Required. Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in [games](https://core.telegram.org/bots/api#games).
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getChatInstance(): mixed
    {
        return $this->getFieldValue('chat_instance');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatInstance(mixed $value): static
    {
        return $this->setFieldValue('chat_instance', $value);
    }

    /**
     * Optional. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getData(): mixed
    {
        return $this->getFieldValue('data');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setData(mixed $value): static
    {
        return $this->setFieldValue('data', $value);
    }

    /**
     * Optional. Short name of a `Game` to be returned, serves as the unique identifier for the game
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getGameShortName(): mixed
    {
        return $this->getFieldValue('game_short_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGameShortName(mixed $value): static
    {
        return $this->setFieldValue('game_short_name', $value);
    }
}
