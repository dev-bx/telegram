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
 * Describes a service message about the rejection of a suggested post.
 * @property Message $suggestedPostMessage
 * *Optional*. Message containing the suggested post. Note that the [Message](#message) object in this field will not contain the *reply\_to\_message* field even if it itself is a reply.
 * @property string $comment
 * *Optional*. Comment with which the post was declined
 */
class SuggestedPostDeclined extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'suggested_post_message' => [
				'type' => [Message::class],
			],
			'comment' => [
				'type' => ['string'],
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
	* @return string
	*/

	public function getComment(): mixed
	{
		return $this->getFieldValue('comment');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setComment(mixed $value): static
	{
		return $this->setFieldValue('comment', $value);
	}

}