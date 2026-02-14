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
 * This object describes a unique gift that was upgraded from a regular gift.
 * @property string $giftId
 * Identifier of the regular gift from which the gift was upgraded
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
 * @property bool $isPremium
 * *Optional*. *True*, if the original regular gift was exclusively purchaseable by Telegram Premium subscribers
 * @property bool $isBurned
 * *Optional*. *True*, if the gift was used to craft another gift and isn't available anymore
 * @property bool $isFromBlockchain
 * *Optional*. *True*, if the gift is assigned from the TON blockchain and can't be resold or transferred in Telegram
 * @property UniqueGiftColors $colors
 * *Optional*. The color scheme that can be used by the gift's owner for the chat's name, replies to messages and link previews; for business account gifts and gifts that are currently on sale only
 * @property Chat $publisherChat
 * *Optional*. Information about the chat that published the gift
 */
class UniqueGift extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'gift_id' => [
				'type' => ['string'],
				'required' => true,
			],
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
			'is_premium' => [
				'type' => ['bool'],
			],
			'is_burned' => [
				'type' => ['bool'],
			],
			'is_from_blockchain' => [
				'type' => ['bool'],
			],
			'colors' => [
				'type' => [UniqueGiftColors::class],
			],
			'publisher_chat' => [
				'type' => [Chat::class],
			],
		];
	}
	/**
	* @return string
	*/

	public function getGiftId(): mixed
	{
		return $this->getFieldValue('gift_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setGiftId(mixed $value): static
	{
		return $this->setFieldValue('gift_id', $value);
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

	/**
	* @return bool
	*/

	public function getIsPremium(): mixed
	{
		return $this->getFieldValue('is_premium');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsPremium(mixed $value): static
	{
		return $this->setFieldValue('is_premium', $value);
	}

	/**
	* @return bool
	*/

	public function getIsBurned(): mixed
	{
		return $this->getFieldValue('is_burned');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsBurned(mixed $value): static
	{
		return $this->setFieldValue('is_burned', $value);
	}

	/**
	* @return bool
	*/

	public function getIsFromBlockchain(): mixed
	{
		return $this->getFieldValue('is_from_blockchain');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsFromBlockchain(mixed $value): static
	{
		return $this->setFieldValue('is_from_blockchain', $value);
	}

	/**
	* @return UniqueGiftColors
	*/

	public function getColors(): mixed
	{
		return $this->getFieldValue('colors');
	}

	/**
	* @param UniqueGiftColors $value
	* @return static
	*/

	public function setColors(mixed $value): static
	{
		return $this->setFieldValue('colors', $value);
	}

	/**
	* @return Chat
	*/

	public function getPublisherChat(): mixed
	{
		return $this->getFieldValue('publisher_chat');
	}

	/**
	* @param Chat $value
	* @return static
	*/

	public function setPublisherChat(mixed $value): static
	{
		return $this->setFieldValue('publisher_chat', $value);
	}

}