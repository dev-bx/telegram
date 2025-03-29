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
 * Use this method to send static .WEBP, [animated](https://telegram.org/blog/animated-stickers) .TGS, or [video](https://telegram.org/blog/video-stickers-better-reactions) .WEBM stickers. On success, the sent [Message](#message) is returned.
 * @property string $businessConnectionId
 * Unique identifier of the business connection on behalf of which the message will be sent
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $messageThreadId
 * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
 * @property Types\InputFile|string $sticker
 * Sticker to send. Pass a file\_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a .WEBP sticker from the Internet, or upload a new .WEBP, .TGS, or .WEBM sticker using multipart/form-data. [More information on Sending Files »](#sending-files). Video and animated stickers can't be sent via an HTTP URL.
 * @property string $emoji
 * Emoji associated with the sticker; only for just uploaded stickers
 * @property bool $disableNotification
 * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
 * @property bool $protectContent
 * Protects the contents of the sent message from forwarding and saving
 * @property bool $allowPaidBroadcast
 * Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
 * @property string $messageEffectId
 * Unique identifier of the message effect to be added to the message; for private chats only
 * @property Types\ReplyParameters $replyParameters
 * Description of the message to reply to
 * @property Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $replyMarkup
 * Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
 * @method Types\Message send(Api $gateway = null)
 */
class SendSticker extends Base\Request
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
            'sticker' => [
                'type' => [Types\InputFile::class, 'string'],
                'required' => true,
            ],
            'emoji' => [
                'type' => ['string'],
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
                'type' => Types\Message::class,
            ],
        ];
    }

    /**
    * @return string
    */

    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
    * @return int|string
    */

    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
    * @param int|string $value
    * @return static
    */

    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
    * @return int
    */

    public function getMessageThreadId(): mixed
    {
        return $this->getFieldValue('message_thread_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setMessageThreadId(mixed $value): static
    {
        return $this->setFieldValue('message_thread_id', $value);
    }

    /**
    * @return Types\InputFile|string
    */

    public function getSticker(): mixed
    {
        return $this->getFieldValue('sticker');
    }

    /**
    * @param Types\InputFile|string $value
    * @return static
    */

    public function setSticker(mixed $value): static
    {
        return $this->setFieldValue('sticker', $value);
    }

    /**
    * @return string
    */

    public function getEmoji(): mixed
    {
        return $this->getFieldValue('emoji');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setEmoji(mixed $value): static
    {
        return $this->setFieldValue('emoji', $value);
    }

    /**
    * @return bool
    */

    public function getDisableNotification(): mixed
    {
        return $this->getFieldValue('disable_notification');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setDisableNotification(mixed $value): static
    {
        return $this->setFieldValue('disable_notification', $value);
    }

    /**
    * @return bool
    */

    public function getProtectContent(): mixed
    {
        return $this->getFieldValue('protect_content');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setProtectContent(mixed $value): static
    {
        return $this->setFieldValue('protect_content', $value);
    }

    /**
    * @return bool
    */

    public function getAllowPaidBroadcast(): mixed
    {
        return $this->getFieldValue('allow_paid_broadcast');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setAllowPaidBroadcast(mixed $value): static
    {
        return $this->setFieldValue('allow_paid_broadcast', $value);
    }

    /**
    * @return string
    */

    public function getMessageEffectId(): mixed
    {
        return $this->getFieldValue('message_effect_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setMessageEffectId(mixed $value): static
    {
        return $this->setFieldValue('message_effect_id', $value);
    }

    /**
    * @return Types\ReplyParameters
    */

    public function getReplyParameters(): mixed
    {
        return $this->getFieldValue('reply_parameters');
    }

    /**
    * @param Types\ReplyParameters $value
    * @return static
    */

    public function setReplyParameters(mixed $value): static
    {
        return $this->setFieldValue('reply_parameters', $value);
    }

    /**
    * @return Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply
    */

    public function getReplyMarkup(): mixed
    {
        return $this->getFieldValue('reply_markup');
    }

    /**
    * @param Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $value
    * @return static
    */

    public function setReplyMarkup(mixed $value): static
    {
        return $this->setFieldValue('reply_markup', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SendSticker';
    }
}