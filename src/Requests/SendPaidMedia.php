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
 * Use this method to send paid media. On success, the sent `Message` is returned.
 *
 * @link https://core.telegram.org/bots/api#sendpaidmedia
 *
 * @property-read string|null $businessConnectionId Optional. Unique identifier of the business connection on behalf of which the message will be sent
 * @property-write string $businessConnectionId
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`. If the chat is a channel, all Telegram Star proceeds from this media will be credited to the chat's balance. Otherwise, they will be credited to the bot's balance.
 * @property-write int|string $chatId
 * @property-read int|null $messageThreadId Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property-write int $messageThreadId
 * @property-read int|null $directMessagesTopicId Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
 * @property-write int $directMessagesTopicId
 * @property-read int|null $starCount Required. The number of Telegram Stars that must be paid to buy access to the media; 1-25000
 * @property-write int $starCount
 * @property-read Base\ArrayObject<Types\InputPaidMedia> $media Required. A JSON-serialized Array describing the media to be sent; up to 10 items
 * @property-write list<Types\InputPaidMedia|array<string, mixed>>|Base\ArrayObject<Types\InputPaidMedia> $media
 * @property-read string|null $payload Optional. Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the user, use it for your internal processes.
 * @property-write string $payload
 * @property-read string|null $caption Optional. Media caption, 0-1024 characters after entities parsing
 * @property-write string $caption
 * @property-read string|null $parseMode Optional. Mode for parsing entities in the media caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $parseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $captionEntities Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $captionEntities
 * @property-read bool|null $showCaptionAboveMedia Optional. Pass *True* if the caption must be shown above the message media
 * @property-write bool $showCaptionAboveMedia
 * @property-read bool|null $disableNotification Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
 * @property-write bool $disableNotification
 * @property-read bool|null $protectContent Optional. Protects the contents of the sent message from forwarding and saving
 * @property-write bool $protectContent
 * @property-read bool|null $allowPaidBroadcast Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
 * @property-write bool $allowPaidBroadcast
 * @property-read Types\SuggestedPostParameters|null $suggestedPostParameters Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
 * @property-write Types\SuggestedPostParameters|array<string, mixed> $suggestedPostParameters
 * @property-read Types\ReplyParameters|null $replyParameters Optional. Description of the message to reply to
 * @property-write Types\ReplyParameters|array<string, mixed> $replyParameters
 * @property-read Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply|null $replyMarkup Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
 * @property-write Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $replyMarkup
 *
 * @method Types\Message send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SendPaidMedia extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
            ],
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
            'star_count' => [
                'type' => ['int'],
                'required' => true,
            ],
            'media' => [
                'type' => [Types\InputPaidMedia::class],
                'isArray' => true,
                'required' => true,
            ],
            'payload' => [
                'type' => ['string'],
            ],
            'caption' => [
                'type' => ['string'],
            ],
            'parse_mode' => [
                'type' => ['string'],
            ],
            'caption_entities' => [
                'type' => [Types\MessageEntity::class],
                'isArray' => true,
            ],
            'show_caption_above_media' => [
                'type' => ['bool'],
            ],
            'disable_notification' => [
                'type' => ['bool'],
            ],
            'protect_content' => [
                'type' => ['bool'],
            ],
            'allow_paid_broadcast' => [
                'type' => ['bool'],
            ],
            'suggested_post_parameters' => [
                'type' => [Types\SuggestedPostParameters::class],
            ],
            'reply_parameters' => [
                'type' => [Types\ReplyParameters::class],
            ],
            'reply_markup' => [
                'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
            ],
            '@return' => [
                'type' => [Types\Message::class],
            ],
        ];
    }

    /**
     * Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
     * Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`. If the chat is a channel, all Telegram Star proceeds from this media will be credited to the chat's balance. Otherwise, they will be credited to the bot's balance.
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
     * Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
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
     * Required. The number of Telegram Stars that must be paid to buy access to the media; 1-25000
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getStarCount(): mixed
    {
        return $this->getFieldValue('star_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStarCount(mixed $value): static
    {
        return $this->setFieldValue('star_count', $value);
    }

    /**
     * Required. A JSON-serialized Array describing the media to be sent; up to 10 items
     *
     * @return Base\ArrayObject<Types\InputPaidMedia>
     * @throws Base\TelegramException
     */
    public function getMedia(): mixed
    {
        return $this->getFieldValue('media');
    }

    /**
     * @param list<Types\InputPaidMedia|array<string, mixed>>|Base\ArrayObject<Types\InputPaidMedia> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMedia(mixed $value): static
    {
        return $this->setFieldValue('media', $value);
    }

    /**
     * Optional. Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the user, use it for your internal processes.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPayload(): mixed
    {
        return $this->getFieldValue('payload');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPayload(mixed $value): static
    {
        return $this->setFieldValue('payload', $value);
    }

    /**
     * Optional. Media caption, 0-1024 characters after entities parsing
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCaption(): mixed
    {
        return $this->getFieldValue('caption');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaption(mixed $value): static
    {
        return $this->setFieldValue('caption', $value);
    }

    /**
     * Optional. Mode for parsing entities in the media caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getParseMode(): mixed
    {
        return $this->getFieldValue('parse_mode');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setParseMode(mixed $value): static
    {
        return $this->setFieldValue('parse_mode', $value);
    }

    /**
     * Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *
     * @return Base\ArrayObject<Types\MessageEntity>
     * @throws Base\TelegramException
     */
    public function getCaptionEntities(): mixed
    {
        return $this->getFieldValue('caption_entities');
    }

    /**
     * @param list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaptionEntities(mixed $value): static
    {
        return $this->setFieldValue('caption_entities', $value);
    }

    /**
     * Optional. Pass *True* if the caption must be shown above the message media
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getShowCaptionAboveMedia(): mixed
    {
        return $this->getFieldValue('show_caption_above_media');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShowCaptionAboveMedia(mixed $value): static
    {
        return $this->setFieldValue('show_caption_above_media', $value);
    }

    /**
     * Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
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
     * Optional. Protects the contents of the sent message from forwarding and saving
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
     * Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAllowPaidBroadcast(): mixed
    {
        return $this->getFieldValue('allow_paid_broadcast');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAllowPaidBroadcast(mixed $value): static
    {
        return $this->setFieldValue('allow_paid_broadcast', $value);
    }

    /**
     * Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *
     * @return Types\SuggestedPostParameters|null
     * @throws Base\TelegramException
     */
    public function getSuggestedPostParameters(): mixed
    {
        return $this->getFieldValue('suggested_post_parameters');
    }

    /**
     * @param Types\SuggestedPostParameters|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSuggestedPostParameters(mixed $value): static
    {
        return $this->setFieldValue('suggested_post_parameters', $value);
    }

    /**
     * Optional. Description of the message to reply to
     *
     * @return Types\ReplyParameters|null
     * @throws Base\TelegramException
     */
    public function getReplyParameters(): mixed
    {
        return $this->getFieldValue('reply_parameters');
    }

    /**
     * @param Types\ReplyParameters|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplyParameters(mixed $value): static
    {
        return $this->setFieldValue('reply_parameters', $value);
    }

    /**
     * Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     *
     * @return Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply|null
     * @throws Base\TelegramException
     */
    public function getReplyMarkup(): mixed
    {
        return $this->getFieldValue('reply_markup');
    }

    /**
     * @param Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplyMarkup(mixed $value): static
    {
        return $this->setFieldValue('reply_markup', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'sendPaidMedia';
    }
}
