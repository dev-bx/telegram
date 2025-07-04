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

/**
 * Use this method to create a link for an invoice. Returns the created invoice link as *String* on success.
 * @property string $businessConnectionId
 * Unique identifier of the business connection on behalf of which the link will be created. For payments in [Telegram Stars](https://t.me/BotNews/90) only.
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
 * @property int $subscriptionPeriod
 * The number of seconds the subscription will be active for before the next payment. The currency must be set to “XTR” (Telegram Stars) if the parameter is used. Currently, it must always be 2592000 (30 days) if specified. Any number of subscriptions can be active for a given bot at the same time, including multiple concurrent subscriptions from the same user. Subscription price must no exceed 10000 Telegram Stars.
 * @property int $maxTipAmount
 * The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in [Telegram Stars](https://t.me/BotNews/90).
 * @property int[] $suggestedTipAmounts
 * A JSON-serialized array of suggested amounts of tips in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
 * @property string $providerData
 * JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
 * @property string $photoUrl
 * URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
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
 * @method Base\BaseType send(Api $gateway = null)
 */
class CreateInvoiceLink extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
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
            'subscription_period' => [
                'type' => ['int'],
            ],
            'max_tip_amount' => [
                'type' => ['int'],
            ],
            'suggested_tip_amounts' => [
                'type' => ['int'],
                'isArray' => true,
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

    public function getSubscriptionPeriod(): mixed
    {
        return $this->getFieldValue('subscription_period');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setSubscriptionPeriod(mixed $value): static
    {
        return $this->setFieldValue('subscription_period', $value);
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

    protected function getRequestMethod(): string
    {
        return 'CreateInvoiceLink';
    }
}