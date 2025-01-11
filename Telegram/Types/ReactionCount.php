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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;


/**
* Represents a reaction added to a message along with the number of times it was added.
* @property ReactionType $type
* Type of the reaction
* @property int $totalCount
* Number of times the reaction was added
*/

class ReactionCount extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => [ReactionType::class],
				'required' => true,
			],
			'total_count' => [
				'type' => ['int'],
				'required' => true,
			],
		];
	}
	/**
	* @return ReactionType
	*/

	public function getType(): mixed
	{
		return $this->getFieldValue('type');
	}

	/**
	* @param ReactionType $value
	* @return static
	*/

	public function setType(mixed $value): static
	{
		return $this->setFieldValue('type', $value);
	}

	/**
	* @return int
	*/

	public function getTotalCount(): mixed
	{
		return $this->getFieldValue('total_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setTotalCount(mixed $value): static
	{
		return $this->setFieldValue('total_count', $value);
	}

}