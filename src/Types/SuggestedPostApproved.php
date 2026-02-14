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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;


/**
 * Describes a service message about the approval of a suggested post.
 * @property Message $suggestedPostMessage
 * *Optional*. Message containing the suggested post. Note that the [Message](#message) object in this field will not contain the *reply\_to\_message* field even if it itself is a reply.
 * @property SuggestedPostPrice $price
 * *Optional*. Amount paid for the post
 * @property int $sendDate
 * Date when the post will be published
 */
class SuggestedPostApproved extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'suggested_post_message' => [
				'type' => [Message::class],
			],
			'price' => [
				'type' => [SuggestedPostPrice::class],
			],
			'send_date' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return Message
	*/

	public function getSuggestedPostMessage(): mixed
	{
		return $this->getFieldValue('suggested_post_message');
	}

	/**
	* @param Message $value
	* @return static
	*/

	public function setSuggestedPostMessage(mixed $value): static
	{
		return $this->setFieldValue('suggested_post_message', $value);
	}

	/**
	* @return SuggestedPostPrice
	*/

	public function getPrice(): mixed
	{
		return $this->getFieldValue('price');
	}

	/**
	* @param SuggestedPostPrice $value
	* @return static
	*/

	public function setPrice(mixed $value): static
	{
		return $this->setFieldValue('price', $value);
	}

	/**
	* @return int
	*/

	public function getSendDate(): mixed
	{
		return $this->getFieldValue('send_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setSendDate(mixed $value): static
	{
		return $this->setFieldValue('send_date', $value);
	}

}