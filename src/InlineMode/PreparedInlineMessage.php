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


/**
 * Describes an inline message to be sent by a user of a Mini App.
 * @property string $id
 * Unique identifier of the prepared message
 * @property int $expirationDate
 * Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used
 */
class PreparedInlineMessage extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'id' => [
				'type' => ['string'],
				'required' => true,
			],
			'expiration_date' => [
				'type' => ['int'],
				'required' => true,
			],
		];
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
	* @return int
	*/

	public function getExpirationDate(): mixed
	{
		return $this->getFieldValue('expiration_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setExpirationDate(mixed $value): static
	{
		return $this->setFieldValue('expiration_date', $value);
	}

}