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
 * This object contains information about a poll.
 * @property string $id
 * Unique poll identifier
 * @property string $question
 * Poll question, 1-300 characters
 * @property Base\ArrayObject|MessageEntity[] $questionEntities
 * *Optional*. Special entities that appear in the *question*. Currently, only custom emoji entities are allowed in poll questions
 * @property Base\ArrayObject|PollOption[] $options
 * List of poll options
 * @property int $totalVoterCount
 * Total number of users that voted in the poll
 * @property bool $isClosed
 * *True*, if the poll is closed
 * @property bool $isAnonymous
 * *True*, if the poll is anonymous
 * @property string $type
 * Poll type, currently can be “regular” or “quiz”
 * @property bool $allowsMultipleAnswers
 * *True*, if the poll allows multiple answers
 * @property int $correctOptionId
 * *Optional*. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
 * @property string $explanation
 * *Optional*. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
 * @property Base\ArrayObject|MessageEntity[] $explanationEntities
 * *Optional*. Special entities like usernames, URLs, bot commands, etc. that appear in the *explanation*
 * @property int $openPeriod
 * *Optional*. Amount of time in seconds the poll will be active after creation
 * @property int $closeDate
 * *Optional*. Point in time (Unix timestamp) when the poll will be automatically closed
 */
class Poll extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'id' => [
				'type' => ['string'],
				'required' => true,
			],
			'question' => [
				'type' => ['string'],
				'required' => true,
			],
			'question_entities' => [
				'type' => [MessageEntity::class],
				'isArray' => true,
			],
			'options' => [
				'type' => [PollOption::class],
				'isArray' => true,
				'required' => true,
			],
			'total_voter_count' => [
				'type' => ['int'],
				'required' => true,
			],
			'is_closed' => [
				'type' => ['bool'],
				'required' => true,
			],
			'is_anonymous' => [
				'type' => ['bool'],
				'required' => true,
			],
			'type' => [
				'type' => ['string'],
				'required' => true,
			],
			'allows_multiple_answers' => [
				'type' => ['bool'],
				'required' => true,
			],
			'correct_option_id' => [
				'type' => ['int'],
			],
			'explanation' => [
				'type' => ['string'],
			],
			'explanation_entities' => [
				'type' => [MessageEntity::class],
				'isArray' => true,
			],
			'open_period' => [
				'type' => ['int'],
			],
			'close_date' => [
				'type' => ['int'],
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
	* @return string
	*/

	public function getQuestion(): mixed
	{
		return $this->getFieldValue('question');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setQuestion(mixed $value): static
	{
		return $this->setFieldValue('question', $value);
	}

	/**
	* @return Base\ArrayObject|MessageEntity[]
	*/

	public function getQuestionEntities(): mixed
	{
		return $this->getFieldValue('question_entities');
	}

	/**
	* @param Base\ArrayObject|MessageEntity[] $value
	* @return static
	*/

	public function setQuestionEntities(mixed $value): static
	{
		return $this->setFieldValue('question_entities', $value);
	}

	/**
	* @return Base\ArrayObject|PollOption[]
	*/

	public function getOptions(): mixed
	{
		return $this->getFieldValue('options');
	}

	/**
	* @param Base\ArrayObject|PollOption[] $value
	* @return static
	*/

	public function setOptions(mixed $value): static
	{
		return $this->setFieldValue('options', $value);
	}

	/**
	* @return int
	*/

	public function getTotalVoterCount(): mixed
	{
		return $this->getFieldValue('total_voter_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setTotalVoterCount(mixed $value): static
	{
		return $this->setFieldValue('total_voter_count', $value);
	}

	/**
	* @return bool
	*/

	public function getIsClosed(): mixed
	{
		return $this->getFieldValue('is_closed');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsClosed(mixed $value): static
	{
		return $this->setFieldValue('is_closed', $value);
	}

	/**
	* @return bool
	*/

	public function getIsAnonymous(): mixed
	{
		return $this->getFieldValue('is_anonymous');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsAnonymous(mixed $value): static
	{
		return $this->setFieldValue('is_anonymous', $value);
	}

	/**
	* @return string
	*/

	public function getType(): mixed
	{
		return $this->getFieldValue('type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setType(mixed $value): static
	{
		return $this->setFieldValue('type', $value);
	}

	/**
	* @return bool
	*/

	public function getAllowsMultipleAnswers(): mixed
	{
		return $this->getFieldValue('allows_multiple_answers');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setAllowsMultipleAnswers(mixed $value): static
	{
		return $this->setFieldValue('allows_multiple_answers', $value);
	}

	/**
	* @return int
	*/

	public function getCorrectOptionId(): mixed
	{
		return $this->getFieldValue('correct_option_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setCorrectOptionId(mixed $value): static
	{
		return $this->setFieldValue('correct_option_id', $value);
	}

	/**
	* @return string
	*/

	public function getExplanation(): mixed
	{
		return $this->getFieldValue('explanation');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setExplanation(mixed $value): static
	{
		return $this->setFieldValue('explanation', $value);
	}

	/**
	* @return Base\ArrayObject|MessageEntity[]
	*/

	public function getExplanationEntities(): mixed
	{
		return $this->getFieldValue('explanation_entities');
	}

	/**
	* @param Base\ArrayObject|MessageEntity[] $value
	* @return static
	*/

	public function setExplanationEntities(mixed $value): static
	{
		return $this->setFieldValue('explanation_entities', $value);
	}

	/**
	* @return int
	*/

	public function getOpenPeriod(): mixed
	{
		return $this->getFieldValue('open_period');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setOpenPeriod(mixed $value): static
	{
		return $this->setFieldValue('open_period', $value);
	}

	/**
	* @return int
	*/

	public function getCloseDate(): mixed
	{
		return $this->getFieldValue('close_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setCloseDate(mixed $value): static
	{
		return $this->setFieldValue('close_date', $value);
	}

}