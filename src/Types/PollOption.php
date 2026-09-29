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
 * This object contains information about one answer option in a poll.
 * @property string $persistentId
 * Unique identifier of the option, persistent on option addition and deletion
 * @property string $text
 * Option text, 1-100 characters
 * @property Base\ArrayObject|MessageEntity[] $textEntities
 * *Optional*. Special entities that appear in the option *text*. Currently, only custom emoji entities are allowed in poll option texts
 * @property PollMedia $media
 * *Optional*. Media added to the poll option
 * @property int $voterCount
 * Number of users who voted for this option; may be 0 if unknown
 * @property User $addedByUser
 * *Optional*. User who added the option; omitted if the option wasn't added by a user after poll creation
 * @property Chat $addedByChat
 * *Optional*. Chat that added the option; omitted if the option wasn't added by a chat after poll creation
 * @property int $additionDate
 * *Optional*. Point in time (Unix timestamp) when the option was added; omitted if the option existed in the original poll
 */
class PollOption extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'persistent_id' => [
				'type' => ['string'],
				'required' => true,
			],
			'text' => [
				'type' => ['string'],
				'required' => true,
			],
			'text_entities' => [
				'type' => [MessageEntity::class],
				'isArray' => true,
			],
			'media' => [
				'type' => [PollMedia::class],
			],
			'voter_count' => [
				'type' => ['int'],
				'required' => true,
			],
			'added_by_user' => [
				'type' => [User::class],
			],
			'added_by_chat' => [
				'type' => [Chat::class],
			],
			'addition_date' => [
				'type' => ['int'],
			],
		];
	}
	/**
	* @return string
	*/

	public function getPersistentId(): mixed
	{
		return $this->getFieldValue('persistent_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setPersistentId(mixed $value): static
	{
		return $this->setFieldValue('persistent_id', $value);
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
	* @return Base\ArrayObject|MessageEntity[]
	*/

	public function getTextEntities(): mixed
	{
		return $this->getFieldValue('text_entities');
	}

	/**
	* @param Base\ArrayObject|MessageEntity[] $value
	* @return static
	*/

	public function setTextEntities(mixed $value): static
	{
		return $this->setFieldValue('text_entities', $value);
	}

	/**
	* @return PollMedia
	*/

	public function getMedia(): mixed
	{
		return $this->getFieldValue('media');
	}

	/**
	* @param PollMedia $value
	* @return static
	*/

	public function setMedia(mixed $value): static
	{
		return $this->setFieldValue('media', $value);
	}

	/**
	* @return int
	*/

	public function getVoterCount(): mixed
	{
		return $this->getFieldValue('voter_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setVoterCount(mixed $value): static
	{
		return $this->setFieldValue('voter_count', $value);
	}

	/**
	* @return User
	*/

	public function getAddedByUser(): mixed
	{
		return $this->getFieldValue('added_by_user');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setAddedByUser(mixed $value): static
	{
		return $this->setFieldValue('added_by_user', $value);
	}

	/**
	* @return Chat
	*/

	public function getAddedByChat(): mixed
	{
		return $this->getFieldValue('added_by_chat');
	}

	/**
	* @param Chat $value
	* @return static
	*/

	public function setAddedByChat(mixed $value): static
	{
		return $this->setFieldValue('added_by_chat', $value);
	}

	/**
	* @return int
	*/

	public function getAdditionDate(): mixed
	{
		return $this->getFieldValue('addition_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setAdditionDate(mixed $value): static
	{
		return $this->setFieldValue('addition_date', $value);
	}

}