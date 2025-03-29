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

namespace DevBX\Telegram\Games;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;


/**
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 * @property string $title
 * Title of the game
 * @property string $description
 * Description of the game
 * @property Base\ArrayObject|Types\PhotoSize[] $photo
 * Photo that will be displayed in the game message in chats.
 * @property string $text
 * *Optional*. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls [setGameScore](#setgamescore), or manually edited using [editMessageText](#editmessagetext). 0-4096 characters.
 * @property Base\ArrayObject|Types\MessageEntity[] $textEntities
 * *Optional*. Special entities that appear in *text*, such as usernames, URLs, bot commands, etc.
 * @property Types\Animation $animation
 * *Optional*. Animation that will be displayed in the game message in chats. Upload via [BotFather](https://t.me/botfather)
 */
class Game extends Base\BaseType
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
			'photo' => [
				'type' => [Types\PhotoSize::class],
				'isArray' => true,
				'required' => true,
			],
			'text' => [
				'type' => ['string'],
			],
			'text_entities' => [
				'type' => [Types\MessageEntity::class],
				'isArray' => true,
			],
			'animation' => [
				'type' => [Types\Animation::class],
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
	* @return Base\ArrayObject|Types\PhotoSize[]
	*/

	public function getPhoto(): mixed
	{
		return $this->getFieldValue('photo');
	}

	/**
	* @param Base\ArrayObject|Types\PhotoSize[] $value
	* @return static
	*/

	public function setPhoto(mixed $value): static
	{
		return $this->setFieldValue('photo', $value);
	}

	/**
	* @return string
	*/

	public function getText(): mixed
	{
		return $this->getFieldValue('text');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setText(mixed $value): static
	{
		return $this->setFieldValue('text', $value);
	}

	/**
	* @return Base\ArrayObject|Types\MessageEntity[]
	*/

	public function getTextEntities(): mixed
	{
		return $this->getFieldValue('text_entities');
	}

	/**
	* @param Base\ArrayObject|Types\MessageEntity[] $value
	* @return static
	*/

	public function setTextEntities(mixed $value): static
	{
		return $this->setFieldValue('text_entities', $value);
	}

	/**
	* @return Types\Animation
	*/

	public function getAnimation(): mixed
	{
		return $this->getFieldValue('animation');
	}

	/**
	* @param Types\Animation $value
	* @return static
	*/

	public function setAnimation(mixed $value): static
	{
		return $this->setFieldValue('animation', $value);
	}

}