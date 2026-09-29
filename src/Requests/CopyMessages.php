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
 * Use this method to copy messages of any kind. If some of the specified messages can't be found or copied, they are skipped. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz `Poll` can be copied only if the value of the field *correct_option_ids* is known to the bot. The method is analogous to the method `forwardMessages`, but the copied messages don't have a link to the original message. Album grouping is kept for copied messages. On success, an Array of `MessageId` of the sent messages is returned.
 *
 * @link https://core.telegram.org/bots/api#copymessages
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
 * @property-write int|string $chatId
 * @property-read int|null $messageThreadId Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property-write int $messageThreadId
 * @property-read int|null $directMessagesTopicId Optional. Identifier of the direct messages topic to which the messages will be sent; required if the messages are sent to a direct messages chat
 * @property-write int $directMessagesTopicId
 * @property-read int|string|null $fromChatId Required. Unique identifier for the chat where the original messages were sent (or username of the target bot, supergroup or channel in the format `@username`)
 * @property-write int|string $fromChatId
 * @property-read Base\ArrayObject<Base\ParameterInt> $messageIds Required. A JSON-serialized list of 1-100 identifiers of messages in the chat *from_chat_id* to copy. The identifiers must be specified in a strictly increasing order.
 * @property-write list<int>|Base\ArrayObject<Base\ParameterInt> $messageIds
 * @property-read bool|null $disableNotification Optional. Sends the messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
 * @property-write bool $disableNotification
 * @property-read bool|null $protectContent Optional. Protects the contents of the sent messages from forwarding and saving
 * @property-write bool $protectContent
 * @property-read bool|null $removeCaption Optional. Pass *True* to copy the messages without their captions
 * @property-write bool $removeCaption
 *
 * @method Base\ArrayObject<Types\MessageId> send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class CopyMessages extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'message_thread_id' => [
                'type' => ['int'],
            ],
            'direct_messages_topic_id' => [
                'type' => ['int'],
            ],
            'from_chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'message_ids' => [
                'type' => ['int'],
                'isArray' => true,
                'required' => true,
            ],
            'disable_notification' => [
                'type' => ['bool'],
            ],
            'protect_content' => [
                'type' => ['bool'],
            ],
            'remove_caption' => [
                'type' => ['bool'],
            ],
            '@return' => [
                'type' => [Types\MessageId::class],
                'isArray' => true,
            ],
        ];
    }

    /**
     * Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
     *
     * @return int|string|null
     * @throws Base\TelegramException
     */
    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
     * @param int|string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
     * Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMessageThreadId(): mixed
    {
        return $this->getFieldValue('message_thread_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageThreadId(mixed $value): static
    {
        return $this->setFieldValue('message_thread_id', $value);
    }

    /**
     * Optional. Identifier of the direct messages topic to which the messages will be sent; required if the messages are sent to a direct messages chat
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDirectMessagesTopicId(): mixed
    {
        return $this->getFieldValue('direct_messages_topic_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDirectMessagesTopicId(mixed $value): static
    {
        return $this->setFieldValue('direct_messages_topic_id', $value);
    }

    /**
     * Required. Unique identifier for the chat where the original messages were sent (or username of the target bot, supergroup or channel in the format `@username`)
     *
     * @return int|string|null
     * @throws Base\TelegramException
     */
    public function getFromChatId(): mixed
    {
        return $this->getFieldValue('from_chat_id');
    }

    /**
     * @param int|string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFromChatId(mixed $value): static
    {
        return $this->setFieldValue('from_chat_id', $value);
    }

    /**
     * Required. A JSON-serialized list of 1-100 identifiers of messages in the chat *from_chat_id* to copy. The identifiers must be specified in a strictly increasing order.
     *
     * @return Base\ArrayObject<Base\ParameterInt>
     * @throws Base\TelegramException
     */
    public function getMessageIds(): mixed
    {
        return $this->getFieldValue('message_ids');
    }

    /**
     * @param list<int>|Base\ArrayObject<Base\ParameterInt> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageIds(mixed $value): static
    {
        return $this->setFieldValue('message_ids', $value);
    }

    /**
     * Optional. Sends the messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getDisableNotification(): mixed
    {
        return $this->getFieldValue('disable_notification');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDisableNotification(mixed $value): static
    {
        return $this->setFieldValue('disable_notification', $value);
    }

    /**
     * Optional. Protects the contents of the sent messages from forwarding and saving
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getProtectContent(): mixed
    {
        return $this->getFieldValue('protect_content');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setProtectContent(mixed $value): static
    {
        return $this->setFieldValue('protect_content', $value);
    }

    /**
     * Optional. Pass *True* to copy the messages without their captions
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getRemoveCaption(): mixed
    {
        return $this->getFieldValue('remove_caption');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRemoveCaption(mixed $value): static
    {
        return $this->setFieldValue('remove_caption', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'copyMessages';
    }
}
