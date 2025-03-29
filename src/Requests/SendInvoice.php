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
use DevBX\Telegram\Payments;
use DevBX\Telegram\Types;

/**
 * Use this method to send invoices. On success, the sent [Message](#message) is returned.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $messageThreadId
 * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
 * @property string $title
 * Product name, 1-32 characters
 * @property string $description
 * Product description, 1-255 characters
 * @property string $payload
 * Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
 * @property string $providerToken
 * Payment provider token, obtained via [@BotFather](https://t.me/botfather). Pass an empty string for payments in [Telegram Stars](https://t.me/BotNews/90).
 * @property string $currency
 * Three-letter ISO 4217 currency code, see [more on currencies](/bots/payments#supported-currencies). Pass “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90).
 * @property Base\ArrayObject|Payments\LabeledPrice[] $prices
 * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in [Telegram Stars](https://t.me/BotNews/90).
 * @property int $maxTipAmount
 * The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in [Telegram Stars](https://t.me/BotNews/90).
 * @property int[] $suggestedTipAmounts
 * A JSON-serialized array of suggested amounts of tips in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
 * @property string $startParameter
 * Unique deep-linking parameter. If left empty, **forwarded copies** of the sent message will have a *Pay* button, allowing multiple users to pay directly from the forwarded message, using the same invoice. If non-empty, forwarded copies of the sent message will have a *URL* button with a deep link to the bot (instead of a *Pay* button), with the value used as the start parameter
 * @property string $providerData
 * JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
 * @property string $photoUrl
 * URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
 * @property int $photoSize
 * Photo size in bytes
 * @property int $photoWidth
 * Photo width
 * @property int $photoHeight
 * Photo height
 * @property bool $needName
 * Pass *True* if you require the user's full name to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
 * @property bool $needPhoneNumber
 * Pass *True* if you require the user's phone number to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
 * @property bool $needEmail
 * Pass *True* if you require the user's email address to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
 * @property bool $needShippingAddress
 * Pass *True* if you require the user's shipping address to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
 * @property bool $sendPhoneNumberToProvider
 * Pass *True* if the user's phone number should be sent to the provider. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
 * @property bool $sendEmailToProvider
 * Pass *True* if the user's email address should be sent to the provider. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
 * @property bool $isFlexible
 * Pass *True* if the final price depends on the shipping method. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
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
 * @property Types\InlineKeyboardMarkup $replyMarkup
 * A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards). If empty, one 'Pay `total price`' button will be shown. If not empty, the first button must be a Pay button.
 * @method Types\Message send(Api $gateway = null)
 */
class SendInvoice extends Base\Request
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
            'title' => [
                'type' => ['string'],
                'required' => true,
            ],
            'description' => [
                'type' => ['string'],
                'required' => true,
            ],
            'payload' => [
                'type' => ['string'],
                'required' => true,
            ],
            'provider_token' => [
                'type' => ['string'],
            ],
            'currency' => [
                'type' => ['string'],
                'required' => true,
            ],
            'prices' => [
                'type' => [Payments\LabeledPrice::class],
                'isArray' => true,
                'required' => true,
            ],
            'max_tip_amount' => [
                'type' => ['int'],
            ],
            'suggested_tip_amounts' => [
                'type' => ['int'],
                'isArray' => true,
            ],
            'start_parameter' => [
                'type' => ['string'],
            ],
            'provider_data' => [
                'type' => ['string'],
            ],
            'photo_url' => [
                'type' => ['string'],
            ],
            'photo_size' => [
                'type' => ['int'],
            ],
            'photo_width' => [
                'type' => ['int'],
            ],
            'photo_height' => [
                'type' => ['int'],
            ],
            'need_name' => [
                'type' => ['bool'],
            ],
            'need_phone_number' => [
                'type' => ['bool'],
            ],
            'need_email' => [
                'type' => ['bool'],
            ],
            'need_shipping_address' => [
                'type' => ['bool'],
            ],
            'send_phone_number_to_provider' => [
                'type' => ['bool'],
            ],
            'send_email_to_provider' => [
                'type' => ['bool'],
            ],
            'is_flexible' => [
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
                'type' => [Types\InlineKeyboardMarkup::class],
            ],
            '@return' => [
                'type' => Types\Message::class,
            ],
        ];
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
    * @return string
    */

    public function getTitle(): mixed
    {
        return $this->getFieldValue('title');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setTitle(mixed $value): static
    {
        return $this->setFieldValue('title', $value);
    }

    /**
    * @return string
    */

    public function getDescription(): mixed
    {
        return $this->getFieldValue('description');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setDescription(mixed $value): static
    {
        return $this->setFieldValue('description', $value);
    }

    /**
    * @return string
    */

    public function getPayload(): mixed
    {
        return $this->getFieldValue('payload');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setPayload(mixed $value): static
    {
        return $this->setFieldValue('payload', $value);
    }

    /**
    * @return string
    */

    public function getProviderToken(): mixed
    {
        return $this->getFieldValue('provider_token');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setProviderToken(mixed $value): static
    {
        return $this->setFieldValue('provider_token', $value);
    }

    /**
    * @return string
    */

    public function getCurrency(): mixed
    {
        return $this->getFieldValue('currency');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setCurrency(mixed $value): static
    {
        return $this->setFieldValue('currency', $value);
    }

    /**
    * @return Base\ArrayObject|Payments\LabeledPrice[]
    */

    public function getPrices(): mixed
    {
        return $this->getFieldValue('prices');
    }

    /**
    * @param Base\ArrayObject|Payments\LabeledPrice[] $value
    * @return static
    */

    public function setPrices(mixed $value): static
    {
        return $this->setFieldValue('prices', $value);
    }

    /**
    * @return int
    */

    public function getMaxTipAmount(): mixed
    {
        return $this->getFieldValue('max_tip_amount');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setMaxTipAmount(mixed $value): static
    {
        return $this->setFieldValue('max_tip_amount', $value);
    }

    /**
    * @return int[]
    */

    public function getSuggestedTipAmounts(): mixed
    {
        return $this->getFieldValue('suggested_tip_amounts');
    }

    /**
    * @param int[] $value
    * @return static
    */

    public function setSuggestedTipAmounts(mixed $value): static
    {
        return $this->setFieldValue('suggested_tip_amounts', $value);
    }

    /**
    * @return string
    */

    public function getStartParameter(): mixed
    {
        return $this->getFieldValue('start_parameter');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setStartParameter(mixed $value): static
    {
        return $this->setFieldValue('start_parameter', $value);
    }

    /**
    * @return string
    */

    public function getProviderData(): mixed
    {
        return $this->getFieldValue('provider_data');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setProviderData(mixed $value): static
    {
        return $this->setFieldValue('provider_data', $value);
    }

    /**
    * @return string
    */

    public function getPhotoUrl(): mixed
    {
        return $this->getFieldValue('photo_url');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setPhotoUrl(mixed $value): static
    {
        return $this->setFieldValue('photo_url', $value);
    }

    /**
    * @return int
    */

    public function getPhotoSize(): mixed
    {
        return $this->getFieldValue('photo_size');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setPhotoSize(mixed $value): static
    {
        return $this->setFieldValue('photo_size', $value);
    }

    /**
    * @return int
    */

    public function getPhotoWidth(): mixed
    {
        return $this->getFieldValue('photo_width');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setPhotoWidth(mixed $value): static
    {
        return $this->setFieldValue('photo_width', $value);
    }

    /**
    * @return int
    */

    public function getPhotoHeight(): mixed
    {
        return $this->getFieldValue('photo_height');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setPhotoHeight(mixed $value): static
    {
        return $this->setFieldValue('photo_height', $value);
    }

    /**
    * @return bool
    */

    public function getNeedName(): mixed
    {
        return $this->getFieldValue('need_name');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setNeedName(mixed $value): static
    {
        return $this->setFieldValue('need_name', $value);
    }

    /**
    * @return bool
    */

    public function getNeedPhoneNumber(): mixed
    {
        return $this->getFieldValue('need_phone_number');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setNeedPhoneNumber(mixed $value): static
    {
        return $this->setFieldValue('need_phone_number', $value);
    }

    /**
    * @return bool
    */

    public function getNeedEmail(): mixed
    {
        return $this->getFieldValue('need_email');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setNeedEmail(mixed $value): static
    {
        return $this->setFieldValue('need_email', $value);
    }

    /**
    * @return bool
    */

    public function getNeedShippingAddress(): mixed
    {
        return $this->getFieldValue('need_shipping_address');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setNeedShippingAddress(mixed $value): static
    {
        return $this->setFieldValue('need_shipping_address', $value);
    }

    /**
    * @return bool
    */

    public function getSendPhoneNumberToProvider(): mixed
    {
        return $this->getFieldValue('send_phone_number_to_provider');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setSendPhoneNumberToProvider(mixed $value): static
    {
        return $this->setFieldValue('send_phone_number_to_provider', $value);
    }

    /**
    * @return bool
    */

    public function getSendEmailToProvider(): mixed
    {
        return $this->getFieldValue('send_email_to_provider');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setSendEmailToProvider(mixed $value): static
    {
        return $this->setFieldValue('send_email_to_provider', $value);
    }

    /**
    * @return bool
    */

    public function getIsFlexible(): mixed
    {
        return $this->getFieldValue('is_flexible');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setIsFlexible(mixed $value): static
    {
        return $this->setFieldValue('is_flexible', $value);
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
        return 'SendInvoice';
    }
}