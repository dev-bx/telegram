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
 * This object represents an incoming query from a widget in a message sent by the bot or via the bot. Use `answerWidgetQuery` to answer the query. Each user can send at most 5 queries per 5 seconds to the bot from all its widgets.
 *
 * @link https://core.telegram.org/bots/api#widgetquery
 *
 * @property-read string|null $id Required. Unique identifier for this query
 * @property-write string $id
 * @property-read User|null $from Required. Sender
 * @property-write User|array<string, mixed> $from
 * @property-read Chat|null $chat Optional. Chat with the message containing the widget; omitted if the widget is in an inline message
 * @property-write Chat|array<string, mixed> $chat
 * @property-read int|null $messageId Optional. Identifier of the message containing the widget; omitted if the widget is in an inline message
 * @property-write int $messageId
 * @property-read string|null $inlineMessageId Optional. Identifier of the inline message containing the widget
 * @property-write string $inlineMessageId
 * @property-read string|null $chatInstance Required. Global identifier, uniquely corresponding to the chat to which the message with the widget was sent
 * @property-write string $chatInstance
 * @property-read string|null $chatType Optional. For widgets in inline messages, type of the chat to which the message was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”.
 * @property-write string $chatType
 * @property-read WidgetQueryType|null $type Required. Type of the query
 * @property-write WidgetQueryType|array<string, mixed> $type
 * @property-read string|null $data Required. Data of the query, 1-64 bytes
 * @property-write string $data
 * @property-read string|null $widgetId Optional. Unique identifier of the shared widget, which sent the query; omitted if the widget isn't shared
 * @property-write string $widgetId
 */
class WidgetQuery extends Base\BaseType
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
            'chat' => [
                'type' => [Chat::class],
            ],
            'message_id' => [
                'type' => ['int'],
            ],
            'inline_message_id' => [
                'type' => ['string'],
            ],
            'chat_instance' => [
                'type' => ['string'],
                'required' => true,
            ],
            'chat_type' => [
                'type' => ['string'],
            ],
            'type' => [
                'type' => [WidgetQueryType::class],
                'required' => true,
            ],
            'data' => [
                'type' => ['string'],
                'required' => true,
            ],
            'widget_id' => [
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
     * Optional. Chat with the message containing the widget; omitted if the widget is in an inline message
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getChat(): mixed
    {
        return $this->getFieldValue('chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChat(mixed $value): static
    {
        return $this->setFieldValue('chat', $value);
    }

    /**
     * Optional. Identifier of the message containing the widget; omitted if the widget is in an inline message
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
     * Optional. Identifier of the inline message containing the widget
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
     * Required. Global identifier, uniquely corresponding to the chat to which the message with the widget was sent
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
     * Optional. For widgets in inline messages, type of the chat to which the message was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getChatType(): mixed
    {
        return $this->getFieldValue('chat_type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatType(mixed $value): static
    {
        return $this->setFieldValue('chat_type', $value);
    }

    /**
     * Required. Type of the query
     *
     * @return WidgetQueryType|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param WidgetQueryType|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Required. Data of the query, 1-64 bytes
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
     * Optional. Unique identifier of the shared widget, which sent the query; omitted if the widget isn't shared
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getWidgetId(): mixed
    {
        return $this->getFieldValue('widget_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWidgetId(mixed $value): static
    {
        return $this->setFieldValue('widget_id', $value);
    }
}
