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
 * Use this method to send a message with an [HTML widget](https://core.telegram.org/bots/widgets). Currently, in the production environment, widgets can be sent only to private chats, and sent widgets automatically have protected content and therefore can't be forwarded. On success, the sent `Message` is returned.
 *
 * @link https://core.telegram.org/bots/api#sendwidget
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
 * @property-write int|string $chatId
 * @property-read int|null $messageThreadId Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property-write int $messageThreadId
 * @property-read string|null $html Required. HTML code of the widget, 1-32768 bytes. The code must not exceed 4096 bytes when compressed by zlib with the maximum compression level.
 * @property-write string $html
 * @property-read int|null $width Optional. Width of the widget in logical pixels; omit if the widget must occupy the whole width of the message bubble. The width is clamped by the app to the range from 200 to the maximum width of the message bubble.
 * @property-write int $width
 * @property-read int|null $height Optional. Height of the widget in logical pixels; omit if the height of the widget isn't fixed. The height is clamped by the app to the range 50-600.
 * @property-write int $height
 * @property-read string|null $publicData Optional. Public data of the widget, 0-1024 bytes, which will be available wherever the widget is shown. If the widget is shared, then all messages with it will have the same public data.
 * @property-write string $publicData
 * @property-read string|null $chatData Optional. Data of the widget, which is specific to the message, 0-1024 bytes
 * @property-write string $chatData
 * @property-read string|null $caption Optional. Widget caption, 0-1024 characters after entities parsing
 * @property-write string $caption
 * @property-read string|null $parseMode Optional. Mode for parsing entities in the widget caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $parseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $captionEntities Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $captionEntities
 * @property-read bool|null $showCaptionAboveMedia Optional. Pass *True* if the caption must be shown above the widget
 * @property-write bool $showCaptionAboveMedia
 * @property-read bool|null $allowQueries Optional. Pass *True* to allow the widget to send queries to the bot
 * @property-write bool $allowQueries
 * @property-read bool|null $isShared Optional. Pass *True* to create a shared widget, which can be sent again using the method `sendSharedWidget`
 * @property-write bool $isShared
 * @property-read bool|null $disableNotification Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
 * @property-write bool $disableNotification
 * @property-read bool|null $protectContent Optional. Protects the contents of the sent message from forwarding and saving
 * @property-write bool $protectContent
 * @property-read bool|null $allowPaidBroadcast Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
 * @property-write bool $allowPaidBroadcast
 * @property-read string|null $messageEffectId Optional. Unique identifier of the message effect to be added to the message; for private chats only
 * @property-write string $messageEffectId
 * @property-read Types\ReplyParameters|null $replyParameters Optional. Description of the message to reply to
 * @property-write Types\ReplyParameters|array<string, mixed> $replyParameters
 * @property-read Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply|null $replyMarkup Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
 * @property-write Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $replyMarkup
 *
 * @method Types\Message send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SendWidget extends Base\Request
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
            'html' => [
                'type' => ['string'],
                'required' => true,
            ],
            'width' => [
                'type' => ['int'],
            ],
            'height' => [
                'type' => ['int'],
            ],
            'public_data' => [
                'type' => ['string'],
            ],
            'chat_data' => [
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
            'allow_queries' => [
                'type' => ['bool'],
            ],
            'is_shared' => [
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
            'message_effect_id' => [
                'type' => ['string'],
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
     * Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
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
     * Required. HTML code of the widget, 1-32768 bytes. The code must not exceed 4096 bytes when compressed by zlib with the maximum compression level.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getHtml(): mixed
    {
        return $this->getFieldValue('html');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHtml(mixed $value): static
    {
        return $this->setFieldValue('html', $value);
    }

    /**
     * Optional. Width of the widget in logical pixels; omit if the widget must occupy the whole width of the message bubble. The width is clamped by the app to the range from 200 to the maximum width of the message bubble.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getWidth(): mixed
    {
        return $this->getFieldValue('width');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWidth(mixed $value): static
    {
        return $this->setFieldValue('width', $value);
    }

    /**
     * Optional. Height of the widget in logical pixels; omit if the height of the widget isn't fixed. The height is clamped by the app to the range 50-600.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getHeight(): mixed
    {
        return $this->getFieldValue('height');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHeight(mixed $value): static
    {
        return $this->setFieldValue('height', $value);
    }

    /**
     * Optional. Public data of the widget, 0-1024 bytes, which will be available wherever the widget is shown. If the widget is shared, then all messages with it will have the same public data.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPublicData(): mixed
    {
        return $this->getFieldValue('public_data');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPublicData(mixed $value): static
    {
        return $this->setFieldValue('public_data', $value);
    }

    /**
     * Optional. Data of the widget, which is specific to the message, 0-1024 bytes
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getChatData(): mixed
    {
        return $this->getFieldValue('chat_data');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatData(mixed $value): static
    {
        return $this->setFieldValue('chat_data', $value);
    }

    /**
     * Optional. Widget caption, 0-1024 characters after entities parsing
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
     * Optional. Mode for parsing entities in the widget caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
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
     * Optional. Pass *True* if the caption must be shown above the widget
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
     * Optional. Pass *True* to allow the widget to send queries to the bot
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAllowQueries(): mixed
    {
        return $this->getFieldValue('allow_queries');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAllowQueries(mixed $value): static
    {
        return $this->setFieldValue('allow_queries', $value);
    }

    /**
     * Optional. Pass *True* to create a shared widget, which can be sent again using the method `sendSharedWidget`
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsShared(): mixed
    {
        return $this->getFieldValue('is_shared');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsShared(mixed $value): static
    {
        return $this->setFieldValue('is_shared', $value);
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
     * Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getMessageEffectId(): mixed
    {
        return $this->getFieldValue('message_effect_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageEffectId(mixed $value): static
    {
        return $this->setFieldValue('message_effect_id', $value);
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
        return 'sendWidget';
    }
}
