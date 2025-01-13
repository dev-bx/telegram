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

namespace DevBX\Telegram\InlineMode;

use DevBX\Telegram\Base;
use DevBX\Telegram\Payments;


/**
* Represents the [content](#inputmessagecontent) of an invoice message to be sent as the result of an inline query.
* @property string $title
* Product name, 1-32 characters
* @property string $description
* Product description, 1-255 characters
* @property string $payload
* Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
* @property string $providerToken
* *Optional*. Payment provider token, obtained via [@BotFather](https://t.me/botfather). Pass an empty string for payments in [Telegram Stars](https://t.me/BotNews/90).
* @property string $currency
* Three-letter ISO 4217 currency code, see [more on currencies](/bots/payments#supported-currencies). Pass “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90).
* @property Base\ArrayObject|Payments\LabeledPrice[] $prices
* Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in [Telegram Stars](https://t.me/BotNews/90).
* @property int $maxTipAmount
* *Optional*. The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in [Telegram Stars](https://t.me/BotNews/90).
* @property int[] $suggestedTipAmounts
* *Optional*. A JSON-serialized array of suggested amounts of tip in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
* @property string $providerData
* *Optional*. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
* @property string $photoUrl
* *Optional*. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
* @property int $photoSize
* *Optional*. Photo size in bytes
* @property int $photoWidth
* *Optional*. Photo width
* @property int $photoHeight
* *Optional*. Photo height
* @property bool $needName
* *Optional*. Pass *True* if you require the user's full name to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
* @property bool $needPhoneNumber
* *Optional*. Pass *True* if you require the user's phone number to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
* @property bool $needEmail
* *Optional*. Pass *True* if you require the user's email address to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
* @property bool $needShippingAddress
* *Optional*. Pass *True* if you require the user's shipping address to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
* @property bool $sendPhoneNumberToProvider
* *Optional*. Pass *True* if the user's phone number should be sent to the provider. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
* @property bool $sendEmailToProvider
* *Optional*. Pass *True* if the user's email address should be sent to the provider. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
* @property bool $isFlexible
* *Optional*. Pass *True* if the final price depends on the shipping method. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
*/

class InputInvoiceMessageContent extends InputMessageContent
{
	public static function getFields(): array
	{
		return [
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

}