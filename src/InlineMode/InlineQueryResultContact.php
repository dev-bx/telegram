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
use DevBX\Telegram\Types;


/**
* Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the contact.
* @property string $type
* Type of the result, must be *contact*
* @property string $id
* Unique identifier for this result, 1-64 Bytes
* @property string $phoneNumber
* Contact's phone number
* @property string $firstName
* Contact's first name
* @property string $lastName
* *Optional*. Contact's last name
* @property string $vcard
* *Optional*. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
* @property Types\InlineKeyboardMarkup $replyMarkup
* *Optional*. [Inline keyboard](/bots/features#inline-keyboards) attached to the message
* @property InputMessageContent|InputTextMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent $inputMessageContent
* *Optional*. Content of the message to be sent instead of the contact
* @property string $thumbnailUrl
* *Optional*. Url of the thumbnail for the result
* @property int $thumbnailWidth
* *Optional*. Thumbnail width
* @property int $thumbnailHeight
* *Optional*. Thumbnail height
*/

class InlineQueryResultContact extends InlineQueryResult
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'contact',
				'required' => true,
			],
			'id' => [
				'type' => ['string'],
				'required' => true,
			],
			'phone_number' => [
				'type' => ['string'],
				'required' => true,
			],
			'first_name' => [
				'type' => ['string'],
				'required' => true,
			],
			'last_name' => [
				'type' => ['string'],
			],
			'vcard' => [
				'type' => ['string'],
			],
			'reply_markup' => [
				'type' => [Types\InlineKeyboardMarkup::class],
			],
			'input_message_content' => [
				'type' => [InputMessageContent::class],
			],
			'thumbnail_url' => [
				'type' => ['string'],
			],
			'thumbnail_width' => [
				'type' => ['int'],
			],
			'thumbnail_height' => [
				'type' => ['int'],
			],
		];
	}
	/**
	* @return string
	*/

	public function getType(): mixed
	{
		return $this->getFieldValue('type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setType(mixed $value): static
	{
		return $this->setFieldValue('type', $value);
	}

	/**
	* @return string
	*/

	public function getId(): mixed
	{
		return $this->getFieldValue('id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setId(mixed $value): static
	{
		return $this->setFieldValue('id', $value);
	}

	/**
	* @return string
	*/

	public function getPhoneNumber(): mixed
	{
		return $this->getFieldValue('phone_number');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setPhoneNumber(mixed $value): static
	{
		return $this->setFieldValue('phone_number', $value);
	}

	/**
	* @return string
	*/

	public function getFirstName(): mixed
	{
		return $this->getFieldValue('first_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setFirstName(mixed $value): static
	{
		return $this->setFieldValue('first_name', $value);
	}

	/**
	* @return string
	*/

	public function getLastName(): mixed
	{
		return $this->getFieldValue('last_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setLastName(mixed $value): static
	{
		return $this->setFieldValue('last_name', $value);
	}

	/**
	* @return string
	*/

	public function getVcard(): mixed
	{
		return $this->getFieldValue('vcard');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setVcard(mixed $value): static
	{
		return $this->setFieldValue('vcard', $value);
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

	/**
	* @return InputMessageContent|InputTextMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent
	*/

	public function getInputMessageContent(): mixed
	{
		return $this->getFieldValue('input_message_content');
	}

	/**
	* @param InputMessageContent|InputTextMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent $value
	* @return static
	*/

	public function setInputMessageContent(mixed $value): static
	{
		return $this->setFieldValue('input_message_content', $value);
	}

	/**
	* @return string
	*/

	public function getThumbnailUrl(): mixed
	{
		return $this->getFieldValue('thumbnail_url');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setThumbnailUrl(mixed $value): static
	{
		return $this->setFieldValue('thumbnail_url', $value);
	}

	/**
	* @return int
	*/

	public function getThumbnailWidth(): mixed
	{
		return $this->getFieldValue('thumbnail_width');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setThumbnailWidth(mixed $value): static
	{
		return $this->setFieldValue('thumbnail_width', $value);
	}

	/**
	* @return int
	*/

	public function getThumbnailHeight(): mixed
	{
		return $this->getFieldValue('thumbnail_height');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setThumbnailHeight(mixed $value): static
	{
		return $this->setFieldValue('thumbnail_height', $value);
	}

}