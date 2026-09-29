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
 * Describes a service message about a chat or a bot being added to a community.
 * @property Community $community
 * The new community to which the chat or the bot belongs
 */
class CommunityChatAdded extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'community' => [
				'type' => [Community::class],
				'required' => true,
			],
		];
	}
	/**
	* @return Community
	*/

	public function getCommunity(): mixed
	{
		return $this->getFieldValue('community');
	}

	/**
	* @param Community $value
	* @return static
	*/

	public function setCommunity(mixed $value): static
	{
		return $this->setFieldValue('community', $value);
	}

}