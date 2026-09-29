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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\Types;

/**
 * Use this method to send a native poll. On success, the sent `Message` is returned.
 *
 * @link https://core.telegram.org/bots/api#sendpoll
 *
 * @property-read string|null $businessConnectionId Optional. Unique identifier of the business connection on behalf of which the message will be sent
 * @property-write string $businessConnectionId
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`. Polls can't be sent to channel direct messages chats.
 * @property-write int|string $chatId
 * @property-read int|null $messageThreadId Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property-write int $messageThreadId
 * @property-read string|null $question Required. Poll question, 1-300 characters
 * @property-write string $question
 * @property-read string|null $questionParseMode Optional. Mode for parsing entities in the question. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details. Currently, only custom emoji entities are allowed.
 * @property-write string $questionParseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $questionEntities Optional. A JSON-serialized list of special entities that appear in the poll question. It can be specified instead of *question_parse_mode*.
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $questionEntities
 * @property-read Base\ArrayObject<Types\InputPollOption> $options Required. A JSON-serialized list of 1-12 answer options
 * @property-write list<Types\InputPollOption|array<string, mixed>>|Base\ArrayObject<Types\InputPollOption> $options
 * @property-read bool|null $isAnonymous Optional. *True*, if the poll needs to be anonymous, defaults to *True*
 * @property-write bool $isAnonymous
 * @property-read string|null $type Optional. Poll type, “quiz” or “regular”, defaults to “regular”
 * @property-write string $type
 * @property-read bool|null $allowsMultipleAnswers Optional. Pass *True* if the poll allows multiple answers, defaults to *False*
 * @property-write bool $allowsMultipleAnswers
 * @property-read bool|null $allowsRevoting Optional. Pass *True* if the poll allows to change chosen answer options, defaults to *False* for quizzes and to *True* for regular polls
 * @property-write bool $allowsRevoting
 * @property-read bool|null $shuffleOptions Optional. Pass *True* if the poll options must be shown in random order
 * @property-write bool $shuffleOptions
 * @property-read bool|null $allowAddingOptions Optional. Pass *True* if answer options can be added to the poll after creation; not supported for anonymous polls and quizzes
 * @property-write bool $allowAddingOptions
 * @property-read bool|null $hideResultsUntilCloses Optional. Pass *True* if poll results must be shown only after the poll closes
 * @property-write bool $hideResultsUntilCloses
 * @property-read bool|null $membersOnly Optional. Pass *True* if voting is limited to users who have been members of the chat where the poll is being sent for more than 24 hours; for channel chats only
 * @property-write bool $membersOnly
 * @property-read Base\ArrayObject<Base\ParameterString> $countryCodes Optional. A JSON-serialized list of 0-12 two-letter [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes indicating the countries from which users can vote in the poll; for channel chats only. Use “FT” as a country code to allow users with anonymous numbers to vote. If omitted or empty, then users from any country can participate in the poll.
 * @property-write list<string>|Base\ArrayObject<Base\ParameterString> $countryCodes
 * @property-read Base\ArrayObject<Base\ParameterInt> $correctOptionIds Optional. A JSON-serialized list of monotonically increasing 0-based identifiers of the correct answer options, required for polls in quiz mode
 * @property-write list<int>|Base\ArrayObject<Base\ParameterInt> $correctOptionIds
 * @property-read string|null $explanation Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
 * @property-write string $explanation
 * @property-read string|null $explanationParseMode Optional. Mode for parsing entities in the explanation. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $explanationParseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $explanationEntities Optional. A JSON-serialized list of special entities that appear in the poll explanation. It can be specified instead of *explanation_parse_mode*.
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $explanationEntities
 * @property-read Types\InputMediaAnimation|Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaLivePhoto|Types\InputMediaLocation|Types\InputMediaPhoto|Types\InputMediaVenue|Types\InputMediaVideo|null $explanationMedia Optional. Media added to the quiz explanation
 * @property-write Types\InputMediaAnimation|Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaLivePhoto|Types\InputMediaLocation|Types\InputMediaPhoto|Types\InputMediaVenue|Types\InputMediaVideo|array<string, mixed> $explanationMedia
 * @property-read int|null $openPeriod Optional. Amount of time in seconds the poll will be active after creation, 5-2628000. Can't be used together with *close_date*.
 * @property-write int $openPeriod
 * @property-read int|null $closeDate Optional. Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 2628000 seconds in the future. Can't be used together with *open_period*.
 * @property-write int $closeDate
 * @property-read bool|null $isClosed Optional. Pass *True* if the poll needs to be immediately closed. This can be useful for poll preview.
 * @property-write bool $isClosed
 * @property-read string|null $description Optional. Description of the poll to be sent, 0-1024 characters after entities parsing
 * @property-write string $description
 * @property-read string|null $descriptionParseMode Optional. Mode for parsing entities in the poll description. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $descriptionParseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $descriptionEntities Optional. A JSON-serialized list of special entities that appear in the poll description, which can be specified instead of *description_parse_mode*
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $descriptionEntities
 * @property-read Types\InputMediaAnimation|Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaLivePhoto|Types\InputMediaLocation|Types\InputMediaPhoto|Types\InputMediaVenue|Types\InputMediaVideo|null $media Optional. Media added to the poll description
 * @property-write Types\InputMediaAnimation|Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaLivePhoto|Types\InputMediaLocation|Types\InputMediaPhoto|Types\InputMediaVenue|Types\InputMediaVideo|array<string, mixed> $media
 * @property-read bool|null $disableNotification Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
 * @property-write bool $disableNotification
 * @property-read bool|null $protectContent Optional. Protects the contents of the sent message from forwarding and saving
 * @property-write bool $protectContent
 * @property-read bool|null $allowPaidBroadcast Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
 * @property-write bool $allowPaidBroadcast
 * @property-read string|null $messageEffectId Optional. Unique identifier of the message effect to be added to the message; for private chats only
 * @property-write string $messageEffectId
 * @property-read Types\ReplyParameters|null $replyParameters Optional. Description of the message to reply to
 * @property-write Types\ReplyParameters|array<string, mixed> $replyParameters
 * @property-read Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply|null $replyMarkup Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
 * @property-write Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $replyMarkup
 *
 * @method Types\Message send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SendPoll extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
            ],
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'message_thread_id' => [
                'type' => ['int'],
            ],
            'question' => [
                'type' => ['string'],
                'required' => true,
            ],
            'question_parse_mode' => [
                'type' => ['string'],
            ],
            'question_entities' => [
                'type' => [Types\MessageEntity::class],
                'isArray' => true,
            ],
            'options' => [
                'type' => [Types\InputPollOption::class],
                'isArray' => true,
                'required' => true,
            ],
            'is_anonymous' => [
                'type' => ['bool'],
            ],
            'type' => [
                'type' => ['string'],
            ],
            'allows_multiple_answers' => [
                'type' => ['bool'],
            ],
            'allows_revoting' => [
                'type' => ['bool'],
            ],
            'shuffle_options' => [
                'type' => ['bool'],
            ],
            'allow_adding_options' => [
                'type' => ['bool'],
            ],
            'hide_results_until_closes' => [
                'type' => ['bool'],
            ],
            'members_only' => [
                'type' => ['bool'],
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
            'explanation_parse_mode' => [
                'type' => ['string'],
            ],
            'explanation_entities' => [
                'type' => [Types\MessageEntity::class],
                'isArray' => true,
            ],
            'explanation_media' => [
                'type' => [Types\InputPollMedia::class],
            ],
            'open_period' => [
                'type' => ['int'],
            ],
            'close_date' => [
                'type' => ['int'],
            ],
            'is_closed' => [
                'type' => ['bool'],
            ],
            'description' => [
                'type' => ['string'],
            ],
            'description_parse_mode' => [
                'type' => ['string'],
            ],
            'description_entities' => [
                'type' => [Types\MessageEntity::class],
                'isArray' => true,
            ],
            'media' => [
                'type' => [Types\InputPollMedia::class],
            ],
            'disable_notification' => [
                'type' => ['bool'],
            ],
            'protect_content' => [
                'type' => ['bool'],
            ],
            'allow_paid_broadcast' => [
                'type' => ['bool'],
            ],
            'message_effect_id' => [
                'type' => ['string'],
            ],
            'reply_parameters' => [
                'type' => [Types\ReplyParameters::class],
            ],
            'reply_markup' => [
                'type' => [Types\InlineKeyboardMarkup::class, Types\ReplyKeyboardMarkup::class, Types\ReplyKeyboardRemove::class, Types\ForceReply::class],
            ],
            '@return' => [
                'type' => [Types\Message::class],
            ],
        ];
    }

    /**
     * Optional. Unique identifier of the business connection on behalf of which the message will be sent
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
     * Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`. Polls can't be sent to channel direct messages chats.
     *
     * @return int|string|null
     * @throws Base\TelegramException
     */
    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
     * @param int|string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
     * Optional. Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMessageThreadId(): mixed
    {
        return $this->getFieldValue('message_thread_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageThreadId(mixed $value): static
    {
        return $this->setFieldValue('message_thread_id', $value);
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
     * Optional. Mode for parsing entities in the question. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details. Currently, only custom emoji entities are allowed.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getQuestionParseMode(): mixed
    {
        return $this->getFieldValue('question_parse_mode');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setQuestionParseMode(mixed $value): static
    {
        return $this->setFieldValue('question_parse_mode', $value);
    }

    /**
     * Optional. A JSON-serialized list of special entities that appear in the poll question. It can be specified instead of *question_parse_mode*.
     *
     * @return Base\ArrayObject<Types\MessageEntity>
     * @throws Base\TelegramException
     */
    public function getQuestionEntities(): mixed
    {
        return $this->getFieldValue('question_entities');
    }

    /**
     * @param list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setQuestionEntities(mixed $value): static
    {
        return $this->setFieldValue('question_entities', $value);
    }

    /**
     * Required. A JSON-serialized list of 1-12 answer options
     *
     * @return Base\ArrayObject<Types\InputPollOption>
     * @throws Base\TelegramException
     */
    public function getOptions(): mixed
    {
        return $this->getFieldValue('options');
    }

    /**
     * @param list<Types\InputPollOption|array<string, mixed>>|Base\ArrayObject<Types\InputPollOption> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOptions(mixed $value): static
    {
        return $this->setFieldValue('options', $value);
    }

    /**
     * Optional. *True*, if the poll needs to be anonymous, defaults to *True*
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
     * Optional. Poll type, “quiz” or “regular”, defaults to “regular”
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
     * Optional. Pass *True* if the poll allows multiple answers, defaults to *False*
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
     * Optional. Pass *True* if the poll allows to change chosen answer options, defaults to *False* for quizzes and to *True* for regular polls
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
     * Optional. Pass *True* if the poll options must be shown in random order
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getShuffleOptions(): mixed
    {
        return $this->getFieldValue('shuffle_options');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShuffleOptions(mixed $value): static
    {
        return $this->setFieldValue('shuffle_options', $value);
    }

    /**
     * Optional. Pass *True* if answer options can be added to the poll after creation; not supported for anonymous polls and quizzes
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAllowAddingOptions(): mixed
    {
        return $this->getFieldValue('allow_adding_options');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAllowAddingOptions(mixed $value): static
    {
        return $this->setFieldValue('allow_adding_options', $value);
    }

    /**
     * Optional. Pass *True* if poll results must be shown only after the poll closes
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHideResultsUntilCloses(): mixed
    {
        return $this->getFieldValue('hide_results_until_closes');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHideResultsUntilCloses(mixed $value): static
    {
        return $this->setFieldValue('hide_results_until_closes', $value);
    }

    /**
     * Optional. Pass *True* if voting is limited to users who have been members of the chat where the poll is being sent for more than 24 hours; for channel chats only
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
     * Optional. A JSON-serialized list of 0-12 two-letter [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes indicating the countries from which users can vote in the poll; for channel chats only. Use “FT” as a country code to allow users with anonymous numbers to vote. If omitted or empty, then users from any country can participate in the poll.
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
     * Optional. A JSON-serialized list of monotonically increasing 0-based identifiers of the correct answer options, required for polls in quiz mode
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
     * Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
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
     * Optional. Mode for parsing entities in the explanation. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getExplanationParseMode(): mixed
    {
        return $this->getFieldValue('explanation_parse_mode');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExplanationParseMode(mixed $value): static
    {
        return $this->setFieldValue('explanation_parse_mode', $value);
    }

    /**
     * Optional. A JSON-serialized list of special entities that appear in the poll explanation. It can be specified instead of *explanation_parse_mode*.
     *
     * @return Base\ArrayObject<Types\MessageEntity>
     * @throws Base\TelegramException
     */
    public function getExplanationEntities(): mixed
    {
        return $this->getFieldValue('explanation_entities');
    }

    /**
     * @param list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $value
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
     * @return Types\InputMediaAnimation|Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaLivePhoto|Types\InputMediaLocation|Types\InputMediaPhoto|Types\InputMediaVenue|Types\InputMediaVideo|null
     * @throws Base\TelegramException
     */
    public function getExplanationMedia(): mixed
    {
        return $this->getFieldValue('explanation_media');
    }

    /**
     * @param Types\InputMediaAnimation|Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaLivePhoto|Types\InputMediaLocation|Types\InputMediaPhoto|Types\InputMediaVenue|Types\InputMediaVideo|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExplanationMedia(mixed $value): static
    {
        return $this->setFieldValue('explanation_media', $value);
    }

    /**
     * Optional. Amount of time in seconds the poll will be active after creation, 5-2628000. Can't be used together with *close_date*.
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
     * Optional. Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 2628000 seconds in the future. Can't be used together with *open_period*.
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
     * Optional. Pass *True* if the poll needs to be immediately closed. This can be useful for poll preview.
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
     * Optional. Description of the poll to be sent, 0-1024 characters after entities parsing
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
     * Optional. Mode for parsing entities in the poll description. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getDescriptionParseMode(): mixed
    {
        return $this->getFieldValue('description_parse_mode');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDescriptionParseMode(mixed $value): static
    {
        return $this->setFieldValue('description_parse_mode', $value);
    }

    /**
     * Optional. A JSON-serialized list of special entities that appear in the poll description, which can be specified instead of *description_parse_mode*
     *
     * @return Base\ArrayObject<Types\MessageEntity>
     * @throws Base\TelegramException
     */
    public function getDescriptionEntities(): mixed
    {
        return $this->getFieldValue('description_entities');
    }

    /**
     * @param list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDescriptionEntities(mixed $value): static
    {
        return $this->setFieldValue('description_entities', $value);
    }

    /**
     * Optional. Media added to the poll description
     *
     * @return Types\InputMediaAnimation|Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaLivePhoto|Types\InputMediaLocation|Types\InputMediaPhoto|Types\InputMediaVenue|Types\InputMediaVideo|null
     * @throws Base\TelegramException
     */
    public function getMedia(): mixed
    {
        return $this->getFieldValue('media');
    }

    /**
     * @param Types\InputMediaAnimation|Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaLivePhoto|Types\InputMediaLocation|Types\InputMediaPhoto|Types\InputMediaVenue|Types\InputMediaVideo|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMedia(mixed $value): static
    {
        return $this->setFieldValue('media', $value);
    }

    /**
     * Optional. Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getDisableNotification(): mixed
    {
        return $this->getFieldValue('disable_notification');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDisableNotification(mixed $value): static
    {
        return $this->setFieldValue('disable_notification', $value);
    }

    /**
     * Optional. Protects the contents of the sent message from forwarding and saving
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getProtectContent(): mixed
    {
        return $this->getFieldValue('protect_content');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setProtectContent(mixed $value): static
    {
        return $this->setFieldValue('protect_content', $value);
    }

    /**
     * Optional. Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAllowPaidBroadcast(): mixed
    {
        return $this->getFieldValue('allow_paid_broadcast');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAllowPaidBroadcast(mixed $value): static
    {
        return $this->setFieldValue('allow_paid_broadcast', $value);
    }

    /**
     * Optional. Unique identifier of the message effect to be added to the message; for private chats only
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getMessageEffectId(): mixed
    {
        return $this->getFieldValue('message_effect_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageEffectId(mixed $value): static
    {
        return $this->setFieldValue('message_effect_id', $value);
    }

    /**
     * Optional. Description of the message to reply to
     *
     * @return Types\ReplyParameters|null
     * @throws Base\TelegramException
     */
    public function getReplyParameters(): mixed
    {
        return $this->getFieldValue('reply_parameters');
    }

    /**
     * @param Types\ReplyParameters|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplyParameters(mixed $value): static
    {
        return $this->setFieldValue('reply_parameters', $value);
    }

    /**
     * Optional. Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user.
     *
     * @return Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply|null
     * @throws Base\TelegramException
     */
    public function getReplyMarkup(): mixed
    {
        return $this->getFieldValue('reply_markup');
    }

    /**
     * @param Types\InlineKeyboardMarkup|array<string, mixed>|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReplyMarkup(mixed $value): static
    {
        return $this->setFieldValue('reply_markup', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'sendPoll';
    }
}
