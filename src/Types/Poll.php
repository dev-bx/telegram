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
 * This object contains information about a poll.
 *
 * @link https://core.telegram.org/bots/api#poll
 *
 * @property-read string|null $id Required. Unique poll identifier
 * @property-write string $id
 * @property-read string|null $question Required. Poll question, 1-300 characters
 * @property-write string $question
 * @property-read Base\ArrayObject<MessageEntity> $questionEntities Optional. Special entities that appear in the *question*. Currently, only custom emoji entities are allowed in poll questions
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $questionEntities
 * @property-read Base\ArrayObject<PollOption> $options Required. List of poll options
 * @property-write list<PollOption|array<string, mixed>>|Base\ArrayObject<PollOption> $options
 * @property-read int|null $totalVoterCount Required. Total number of users that voted in the poll
 * @property-write int $totalVoterCount
 * @property-read bool|null $isClosed Required. *True*, if the poll is closed
 * @property-write bool $isClosed
 * @property-read bool|null $isAnonymous Required. *True*, if the poll is anonymous
 * @property-write bool $isAnonymous
 * @property-read string|null $type Required. Poll type, currently can be “regular” or “quiz”
 * @property-write string $type
 * @property-read bool|null $allowsMultipleAnswers Required. *True*, if the poll allows multiple answers
 * @property-write bool $allowsMultipleAnswers
 * @property-read bool|null $allowsRevoting Required. *True*, if the poll allows to change the chosen answer options
 * @property-write bool $allowsRevoting
 * @property-read bool|null $membersOnly Required. *True* if voting is limited to users who have been members of the chat where the poll was originally sent for more than 24 hours
 * @property-write bool $membersOnly
 * @property-read Base\ArrayObject<Base\ParameterString> $countryCodes Optional. A list of two-letter [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes indicating the countries from which users can vote in the poll. The country code “FT” is used for users with anonymous numbers. If omitted, then users from any country can participate in the poll.
 * @property-write list<string>|Base\ArrayObject<Base\ParameterString> $countryCodes
 * @property-read Base\ArrayObject<Base\ParameterInt> $correctOptionIds Optional. Array of 0-based identifiers of the correct answer options. Available only for polls in quiz mode which are closed or were sent (not forwarded) by the bot or to the private chat with the bot.
 * @property-write list<int>|Base\ArrayObject<Base\ParameterInt> $correctOptionIds
 * @property-read string|null $explanation Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
 * @property-write string $explanation
 * @property-read Base\ArrayObject<MessageEntity> $explanationEntities Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the *explanation*
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $explanationEntities
 * @property-read PollMedia|null $explanationMedia Optional. Media added to the quiz explanation
 * @property-write PollMedia|array<string, mixed> $explanationMedia
 * @property-read int|null $openPeriod Optional. Amount of time in seconds the poll will be active after creation
 * @property-write int $openPeriod
 * @property-read int|null $closeDate Optional. Point in time (Unix timestamp) when the poll will be automatically closed
 * @property-write int $closeDate
 * @property-read string|null $description Optional. Description of the poll; for polls inside the `Message` object only
 * @property-write string $description
 * @property-read Base\ArrayObject<MessageEntity> $descriptionEntities Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the description
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $descriptionEntities
 * @property-read PollMedia|null $media Optional. Media added to the poll description; for polls inside the `Message` object only
 * @property-write PollMedia|array<string, mixed> $media
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
            'allows_revoting' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'members_only' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'country_codes' => [
                'type' => ['string'],
                'isArray' => true,
            ],
            'correct_option_ids' => [
                'type' => ['int'],
                'isArray' => true,
            ],
            'explanation' => [
                'type' => ['string'],
            ],
            'explanation_entities' => [
                'type' => [MessageEntity::class],
                'isArray' => true,
            ],
            'explanation_media' => [
                'type' => [PollMedia::class],
            ],
            'open_period' => [
                'type' => ['int'],
            ],
            'close_date' => [
                'type' => ['int'],
            ],
            'description' => [
                'type' => ['string'],
            ],
            'description_entities' => [
                'type' => [MessageEntity::class],
                'isArray' => true,
            ],
            'media' => [
                'type' => [PollMedia::class],
            ],
        ];
    }

    /**
     * Required. Unique poll identifier
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Required. Poll question, 1-300 characters
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getQuestion(): mixed
    {
        return $this->getFieldValue('question');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setQuestion(mixed $value): static
    {
        return $this->setFieldValue('question', $value);
    }

    /**
     * Optional. Special entities that appear in the *question*. Currently, only custom emoji entities are allowed in poll questions
     *
     * @return Base\ArrayObject<MessageEntity>
     * @throws Base\TelegramException
     */
    public function getQuestionEntities(): mixed
    {
        return $this->getFieldValue('question_entities');
    }

    /**
     * @param list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setQuestionEntities(mixed $value): static
    {
        return $this->setFieldValue('question_entities', $value);
    }

    /**
     * Required. List of poll options
     *
     * @return Base\ArrayObject<PollOption>
     * @throws Base\TelegramException
     */
    public function getOptions(): mixed
    {
        return $this->getFieldValue('options');
    }

    /**
     * @param list<PollOption|array<string, mixed>>|Base\ArrayObject<PollOption> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOptions(mixed $value): static
    {
        return $this->setFieldValue('options', $value);
    }

    /**
     * Required. Total number of users that voted in the poll
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getTotalVoterCount(): mixed
    {
        return $this->getFieldValue('total_voter_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTotalVoterCount(mixed $value): static
    {
        return $this->setFieldValue('total_voter_count', $value);
    }

    /**
     * Required. *True*, if the poll is closed
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsClosed(): mixed
    {
        return $this->getFieldValue('is_closed');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsClosed(mixed $value): static
    {
        return $this->setFieldValue('is_closed', $value);
    }

    /**
     * Required. *True*, if the poll is anonymous
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsAnonymous(): mixed
    {
        return $this->getFieldValue('is_anonymous');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsAnonymous(mixed $value): static
    {
        return $this->setFieldValue('is_anonymous', $value);
    }

    /**
     * Required. Poll type, currently can be “regular” or “quiz”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Required. *True*, if the poll allows multiple answers
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAllowsMultipleAnswers(): mixed
    {
        return $this->getFieldValue('allows_multiple_answers');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAllowsMultipleAnswers(mixed $value): static
    {
        return $this->setFieldValue('allows_multiple_answers', $value);
    }

    /**
     * Required. *True*, if the poll allows to change the chosen answer options
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAllowsRevoting(): mixed
    {
        return $this->getFieldValue('allows_revoting');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAllowsRevoting(mixed $value): static
    {
        return $this->setFieldValue('allows_revoting', $value);
    }

    /**
     * Required. *True* if voting is limited to users who have been members of the chat where the poll was originally sent for more than 24 hours
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getMembersOnly(): mixed
    {
        return $this->getFieldValue('members_only');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMembersOnly(mixed $value): static
    {
        return $this->setFieldValue('members_only', $value);
    }

    /**
     * Optional. A list of two-letter [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes indicating the countries from which users can vote in the poll. The country code “FT” is used for users with anonymous numbers. If omitted, then users from any country can participate in the poll.
     *
     * @return Base\ArrayObject<Base\ParameterString>
     * @throws Base\TelegramException
     */
    public function getCountryCodes(): mixed
    {
        return $this->getFieldValue('country_codes');
    }

    /**
     * @param list<string>|Base\ArrayObject<Base\ParameterString> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCountryCodes(mixed $value): static
    {
        return $this->setFieldValue('country_codes', $value);
    }

    /**
     * Optional. Array of 0-based identifiers of the correct answer options. Available only for polls in quiz mode which are closed or were sent (not forwarded) by the bot or to the private chat with the bot.
     *
     * @return Base\ArrayObject<Base\ParameterInt>
     * @throws Base\TelegramException
     */
    public function getCorrectOptionIds(): mixed
    {
        return $this->getFieldValue('correct_option_ids');
    }

    /**
     * @param list<int>|Base\ArrayObject<Base\ParameterInt> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCorrectOptionIds(mixed $value): static
    {
        return $this->setFieldValue('correct_option_ids', $value);
    }

    /**
     * Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getExplanation(): mixed
    {
        return $this->getFieldValue('explanation');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExplanation(mixed $value): static
    {
        return $this->setFieldValue('explanation', $value);
    }

    /**
     * Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the *explanation*
     *
     * @return Base\ArrayObject<MessageEntity>
     * @throws Base\TelegramException
     */
    public function getExplanationEntities(): mixed
    {
        return $this->getFieldValue('explanation_entities');
    }

    /**
     * @param list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExplanationEntities(mixed $value): static
    {
        return $this->setFieldValue('explanation_entities', $value);
    }

    /**
     * Optional. Media added to the quiz explanation
     *
     * @return PollMedia|null
     * @throws Base\TelegramException
     */
    public function getExplanationMedia(): mixed
    {
        return $this->getFieldValue('explanation_media');
    }

    /**
     * @param PollMedia|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExplanationMedia(mixed $value): static
    {
        return $this->setFieldValue('explanation_media', $value);
    }

    /**
     * Optional. Amount of time in seconds the poll will be active after creation
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getOpenPeriod(): mixed
    {
        return $this->getFieldValue('open_period');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOpenPeriod(mixed $value): static
    {
        return $this->setFieldValue('open_period', $value);
    }

    /**
     * Optional. Point in time (Unix timestamp) when the poll will be automatically closed
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getCloseDate(): mixed
    {
        return $this->getFieldValue('close_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCloseDate(mixed $value): static
    {
        return $this->setFieldValue('close_date', $value);
    }

    /**
     * Optional. Description of the poll; for polls inside the `Message` object only
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getDescription(): mixed
    {
        return $this->getFieldValue('description');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDescription(mixed $value): static
    {
        return $this->setFieldValue('description', $value);
    }

    /**
     * Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the description
     *
     * @return Base\ArrayObject<MessageEntity>
     * @throws Base\TelegramException
     */
    public function getDescriptionEntities(): mixed
    {
        return $this->getFieldValue('description_entities');
    }

    /**
     * @param list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDescriptionEntities(mixed $value): static
    {
        return $this->setFieldValue('description_entities', $value);
    }

    /**
     * Optional. Media added to the poll description; for polls inside the `Message` object only
     *
     * @return PollMedia|null
     * @throws Base\TelegramException
     */
    public function getMedia(): mixed
    {
        return $this->getFieldValue('media');
    }

    /**
     * @param PollMedia|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMedia(mixed $value): static
    {
        return $this->setFieldValue('media', $value);
    }
}
