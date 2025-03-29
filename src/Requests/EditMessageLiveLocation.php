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
 * Use this method to edit live location messages. A location can be edited until its *live\_period* expires or editing is explicitly disabled by a call to [stopMessageLiveLocation](#stopmessagelivelocation). On success, if the edited message is not an inline message, the edited [Message](#message) is returned, otherwise *True* is returned.
 * @property string $businessConnectionId
 * Unique identifier of the business connection on behalf of which the message to be edited was sent
 * @property int|string $chatId
 * Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $messageId
 * Required if *inline\_message\_id* is not specified. Identifier of the message to edit
 * @property string $inlineMessageId
 * Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
 * @property float $latitude
 * Latitude of new location
 * @property float $longitude
 * Longitude of new location
 * @property int $livePeriod
 * New period in seconds during which the location can be updated, starting from the message send date. If 0x7FFFFFFF is specified, then the location can be updated forever. Otherwise, the new value must not exceed the current *live\_period* by more than a day, and the live location expiration date must remain within the next 90 days. If not specified, then *live\_period* remains unchanged
 * @property float $horizontalAccuracy
 * The radius of uncertainty for the location, measured in meters; 0-1500
 * @property int $heading
 * Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
 * @property int $proximityAlertRadius
 * The maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
 * @property Types\InlineKeyboardMarkup $replyMarkup
 * A JSON-serialized object for a new [inline keyboard](/bots/features#inline-keyboards).
 * @method Types\Message|bool send(Api $gateway = null)
 */
class EditMessageLiveLocation extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
            ],
            'chat_id' => [
                'type' => ['int', 'string'],
            ],
            'message_id' => [
                'type' => ['int'],
            ],
            'inline_message_id' => [
                'type' => ['string'],
            ],
            'latitude' => [
                'type' => ['float'],
                'required' => true,
            ],
            'longitude' => [
                'type' => ['float'],
                'required' => true,
            ],
            'live_period' => [
                'type' => ['int'],
            ],
            'horizontal_accuracy' => [
                'type' => ['float'],
            ],
            'heading' => [
                'type' => ['int'],
            ],
            'proximity_alert_radius' => [
                'type' => ['int'],
            ],
            'reply_markup' => [
                'type' => [Types\InlineKeyboardMarkup::class],
            ],
            '@return' => [
                'type' => Types\Message::class,
                'canReturnBool' => true,
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

    /**
    * @return float
    */

    public function getLatitude(): mixed
    {
        return $this->getFieldValue('latitude');
    }

    /**
    * @param float $value
    * @return static
    */

    public function setLatitude(mixed $value): static
    {
        return $this->setFieldValue('latitude', $value);
    }

    /**
    * @return float
    */

    public function getLongitude(): mixed
    {
        return $this->getFieldValue('longitude');
    }

    /**
    * @param float $value
    * @return static
    */

    public function setLongitude(mixed $value): static
    {
        return $this->setFieldValue('longitude', $value);
    }

    /**
    * @return int
    */

    public function getLivePeriod(): mixed
    {
        return $this->getFieldValue('live_period');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setLivePeriod(mixed $value): static
    {
        return $this->setFieldValue('live_period', $value);
    }

    /**
    * @return float
    */

    public function getHorizontalAccuracy(): mixed
    {
        return $this->getFieldValue('horizontal_accuracy');
    }

    /**
    * @param float $value
    * @return static
    */

    public function setHorizontalAccuracy(mixed $value): static
    {
        return $this->setFieldValue('horizontal_accuracy', $value);
    }

    /**
    * @return int
    */

    public function getHeading(): mixed
    {
        return $this->getFieldValue('heading');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setHeading(mixed $value): static
    {
        return $this->setFieldValue('heading', $value);
    }

    /**
    * @return int
    */

    public function getProximityAlertRadius(): mixed
    {
        return $this->getFieldValue('proximity_alert_radius');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setProximityAlertRadius(mixed $value): static
    {
        return $this->setFieldValue('proximity_alert_radius', $value);
    }

    /**
    * @return Types\InlineKeyboardMarkup
    */

    public function getReplyMarkup(): mixed
    {
        return $this->getFieldValue('reply_markup');
    }

    /**
    * @param Types\InlineKeyboardMarkup $value
    * @return static
    */

    public function setReplyMarkup(mixed $value): static
    {
        return $this->setFieldValue('reply_markup', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'EditMessageLiveLocation';
    }
}