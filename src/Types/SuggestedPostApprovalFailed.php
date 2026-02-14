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
 * Describes a service message about the failed approval of a suggested post. Currently, only caused by insufficient user funds at the time of approval.
 * @property Message $suggestedPostMessage
 * *Optional*. Message containing the suggested post whose approval has failed. Note that the [Message](#message) object in this field will not contain the *reply\_to\_message* field even if it itself is a reply.
 * @property SuggestedPostPrice $price
 * Expected price of the post
 */
class SuggestedPostApprovalFailed extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'suggested_post_message' => [
				'type' => [Message::class],
			],
			'price' => [
				'type' => [SuggestedPostPrice::class],
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

}