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
 * This object describes a unique gift that was upgraded from a regular gift.
 * @property string $baseName
 * Human-readable name of the regular gift from which this unique gift was upgraded
 * @property string $name
 * Unique name of the gift. This name can be used in `https://t.me/nft/...` links and story areas
 * @property int $number
 * Unique number of the upgraded gift among gifts upgraded from the same regular gift
 * @property UniqueGiftModel $model
 * Model of the gift
 * @property UniqueGiftSymbol $symbol
 * Symbol of the gift
 * @property UniqueGiftBackdrop $backdrop
 * Backdrop of the gift
 */
class UniqueGift extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'base_name' => [
				'type' => ['string'],
				'required' => true,
			],
			'name' => [
				'type' => ['string'],
				'required' => true,
			],
			'number' => [
				'type' => ['int'],
				'required' => true,
			],
			'model' => [
				'type' => [UniqueGiftModel::class],
				'required' => true,
			],
			'symbol' => [
				'type' => [UniqueGiftSymbol::class],
				'required' => true,
			],
			'backdrop' => [
				'type' => [UniqueGiftBackdrop::class],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getBaseName(): mixed
	{
		return $this->getFieldValue('base_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setBaseName(mixed $value): static
	{
		return $this->setFieldValue('base_name', $value);
	}

	/**
	* @return string
	*/

	public function getName(): mixed
	{
		return $this->getFieldValue('name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setName(mixed $value): static
	{
		return $this->setFieldValue('name', $value);
	}

	/**
	* @return int
	*/

	public function getNumber(): mixed
	{
		return $this->getFieldValue('number');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setNumber(mixed $value): static
	{
		return $this->setFieldValue('number', $value);
	}

	/**
	* @return UniqueGiftModel
	*/

	public function getModel(): mixed
	{
		return $this->getFieldValue('model');
	}

	/**
	* @param UniqueGiftModel $value
	* @return static
	*/

	public function setModel(mixed $value): static
	{
		return $this->setFieldValue('model', $value);
	}

	/**
	* @return UniqueGiftSymbol
	*/

	public function getSymbol(): mixed
	{
		return $this->getFieldValue('symbol');
	}

	/**
	* @param UniqueGiftSymbol $value
	* @return static
	*/

	public function setSymbol(mixed $value): static
	{
		return $this->setFieldValue('symbol', $value);
	}

	/**
	* @return UniqueGiftBackdrop
	*/

	public function getBackdrop(): mixed
	{
		return $this->getFieldValue('backdrop');
	}

	/**
	* @param UniqueGiftBackdrop $value
	* @return static
	*/

	public function setBackdrop(mixed $value): static
	{
		return $this->setFieldValue('backdrop', $value);
	}

}