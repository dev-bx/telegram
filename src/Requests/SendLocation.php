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
 * Use this method to send point on the map. On success, the sent `Message` is returned.
 *
 * @link https://core.telegram.org/bots/api#sendlocation
 *
 * @property-read string|null $businessConnectionId Optional. Unique identifier of the business connection on behalf of which the message will be sent
 * @property-write string $businessConnectionId
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
 * @property-write int|string $chatId
 * @property-read int|null $messageThreadId Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property-write int $messageThreadId
 * @property-read int|null $directMessagesTopicId Optional. Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
 * @property-write int $directMessagesTopicId
 * @property-read Types\EphemeralMessageParameters|null $ephemeralMessageParameters Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
 * @property-write Types\EphemeralMessageParameters|array<string, mixed> $ephemeralMessageParameters
 * @property-read float|null $latitude Required. Latitude of the location
 * @property-write float|int $latitude
 * @property-read float|null $longitude Required. Longitude of the location
 * @property-write float|int $longitude
 * @property-read float|null $horizontalAccuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
 * @property-write float|int $horizontalAccuracy
 * @property-read int|null $livePeriod Optional. Period in seconds during which the location will be updated (see [Live Locations](https://telegram.org/blog/live-locations)), must be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely. Must be 0 for ephemeral messages.
 * @property-write int $livePeriod
 * @property-read int|null $heading Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
 * @property-write int $heading
 * @property-read int|null $proximityAlertRadius Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
 * @property-write int $proximityAlertRadius
 * @property-read bool|null $disableNotification Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
 * @property-write bool $disableNotification
 * @property-read bool|null $protectContent Optional. Protects the contents of the sent message from forwarding and saving
 * @property-write bool $protectContent
 * @property-read bool|null $allowPaidBroadcast Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
 * @property-write bool $allowPaidBroadcast
 * @property-read string|null $messageEffectId Optional. Unique identifier of the message effect to be added to the message; for private chats only
 * @property-write string $messageEffectId
 * @property-read Types\SuggestedPostParameters|null $suggestedPostParameters Optional. A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
 * @property-write Types\SuggestedPostParameters|array<string, mixed> $suggestedPostParameters
 * @property-read Types\ReplyParameters|null $replyParameters Optional. Description of the message to reply to
 * @property-write Types\ReplyParameters|array<string, mixed> $replyParameters
 * @property-read Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply|null $replyMarkup Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
 * @property-write Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $replyMarkup
 *
 * @method Types\Message send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SendLocation extends Base\Request
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
            'ephemeral_message_parameters' => [
                'type' => [Types\EphemeralMessageParameters::class],
            ],
            'latitude' => [
                'type' => ['float'],
                'required' => true,
            ],
            'longitude' => [
                'type' => ['float'],
                'required' => true,
            ],
            'horizontal_accuracy' => [
                'type' => ['float'],
            ],
            'live_period' => [
                'type' => ['int'],
            ],
            'heading' => [
                'type' => ['int'],
            ],
            'proximity_alert_radius' => [
                'type' => ['int'],
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
     * Optional. A JSON-serialized object containing the parameters of the ephemeral message to send
     *
     * @return Types\EphemeralMessageParameters|null
     * @throws Base\TelegramException
     */
    public function getEphemeralMessageParameters(): mixed
    {
        return $this->getFieldValue('ephemeral_message_parameters');
    }

    /**
     * @param Types\EphemeralMessageParameters|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEphemeralMessageParameters(mixed $value): static
    {
        return $this->setFieldValue('ephemeral_message_parameters', $value);
    }

    /**
     * Required. Latitude of the location
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getLatitude(): mixed
    {
        return $this->getFieldValue('latitude');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLatitude(mixed $value): static
    {
        return $this->setFieldValue('latitude', $value);
    }

    /**
     * Required. Longitude of the location
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getLongitude(): mixed
    {
        return $this->getFieldValue('longitude');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLongitude(mixed $value): static
    {
        return $this->setFieldValue('longitude', $value);
    }

    /**
     * Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     *
     * @return float|null
     * @throws Base\TelegramException
     */
    public function getHorizontalAccuracy(): mixed
    {
        return $this->getFieldValue('horizontal_accuracy');
    }

    /**
     * @param float|int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHorizontalAccuracy(mixed $value): static
    {
        return $this->setFieldValue('horizontal_accuracy', $value);
    }

    /**
     * Optional. Period in seconds during which the location will be updated (see [Live Locations](https://telegram.org/blog/live-locations)), must be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely. Must be 0 for ephemeral messages.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getLivePeriod(): mixed
    {
        return $this->getFieldValue('live_period');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLivePeriod(mixed $value): static
    {
        return $this->setFieldValue('live_period', $value);
    }

    /**
     * Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getHeading(): mixed
    {
        return $this->getFieldValue('heading');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHeading(mixed $value): static
    {
        return $this->setFieldValue('heading', $value);
    }

    /**
     * Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getProximityAlertRadius(): mixed
    {
        return $this->getFieldValue('proximity_alert_radius');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setProximityAlertRadius(mixed $value): static
    {
        return $this->setFieldValue('proximity_alert_radius', $value);
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
        return 'sendLocation';
    }
}
