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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\Types;

/**
 * Use this method to send a native poll. On success, the sent [Message](#message) is returned.
 * @property string $businessConnectionId
 * Unique identifier of the business connection on behalf of which the message will be sent
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $messageThreadId
 * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
 * @property string $question
 * Poll question, 1-300 characters
 * @property string $questionParseMode
 * Mode for parsing entities in the question. See [formatting options](#formatting-options) for more details. Currently, only custom emoji entities are allowed
 * @property Base\ArrayObject|Types\MessageEntity[] $questionEntities
 * A JSON-serialized list of special entities that appear in the poll question. It can be specified instead of *question\_parse\_mode*
 * @property Base\ArrayObject|Types\InputPollOption[] $options
 * A JSON-serialized list of 2-12 answer options
 * @property bool $isAnonymous
 * *True*, if the poll needs to be anonymous, defaults to *True*
 * @property string $type
 * Poll type, “quiz” or “regular”, defaults to “regular”
 * @property bool $allowsMultipleAnswers
 * *True*, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to *False*
 * @property int $correctOptionId
 * 0-based identifier of the correct answer option, required for polls in quiz mode
 * @property string $explanation
 * Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
 * @property string $explanationParseMode
 * Mode for parsing entities in the explanation. See [formatting options](#formatting-options) for more details.
 * @property Base\ArrayObject|Types\MessageEntity[] $explanationEntities
 * A JSON-serialized list of special entities that appear in the poll explanation. It can be specified instead of *explanation\_parse\_mode*
 * @property int $openPeriod
 * Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with *close\_date*.
 * @property int $closeDate
 * Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with *open\_period*.
 * @property bool $isClosed
 * Pass *True* if the poll needs to be immediately closed. This can be useful for poll preview.
 * @property bool $disableNotification
 * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
 * @property bool $protectContent
 * Protects the contents of the sent message from forwarding and saving
 * @property bool $allowPaidBroadcast
 * Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
 * @property string $messageEffectId
 * Unique identifier of the message effect to be added to the message; for private chats only
 * @property Types\ReplyParameters $replyParameters
 * Description of the message to reply to
 * @property Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $replyMarkup
 * Additional interface options. A JSON-serialized object for an [inline keyboard](/bots/features#inline-keyboards), [custom reply keyboard](/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user
 * @method Types\Message send(Api $gateway = null)
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
            'correct_option_id' => [
                'type' => ['int'],
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
            'open_period' => [
                'type' => ['int'],
            ],
            'close_date' => [
                'type' => ['int'],
            ],
            'is_closed' => [
                'type' => ['bool'],
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
                'type' => Types\Message::class,
            ],
        ];
    }

    /**
    * @return string
    */

    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
    * @return int|string
    */

    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
    * @param int|string $value
    * @return static
    */

    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
    * @return int
    */

    public function getMessageThreadId(): mixed
    {
        return $this->getFieldValue('message_thread_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setMessageThreadId(mixed $value): static
    {
        return $this->setFieldValue('message_thread_id', $value);
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
    * @return string
    */

    public function getQuestionParseMode(): mixed
    {
        return $this->getFieldValue('question_parse_mode');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setQuestionParseMode(mixed $value): static
    {
        return $this->setFieldValue('question_parse_mode', $value);
    }

    /**
    * @return Base\ArrayObject|Types\MessageEntity[]
    */

    public function getQuestionEntities(): mixed
    {
        return $this->getFieldValue('question_entities');
    }

    /**
    * @param Base\ArrayObject|Types\MessageEntity[] $value
    * @return static
    */

    public function setQuestionEntities(mixed $value): static
    {
        return $this->setFieldValue('question_entities', $value);
    }

    /**
    * @return Base\ArrayObject|Types\InputPollOption[]
    */

    public function getOptions(): mixed
    {
        return $this->getFieldValue('options');
    }

    /**
    * @param Base\ArrayObject|Types\InputPollOption[] $value
    * @return static
    */

    public function setOptions(mixed $value): static
    {
        return $this->setFieldValue('options', $value);
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
    * @return string
    */

    public function getExplanationParseMode(): mixed
    {
        return $this->getFieldValue('explanation_parse_mode');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setExplanationParseMode(mixed $value): static
    {
        return $this->setFieldValue('explanation_parse_mode', $value);
    }

    /**
    * @return Base\ArrayObject|Types\MessageEntity[]
    */

    public function getExplanationEntities(): mixed
    {
        return $this->getFieldValue('explanation_entities');
    }

    /**
    * @param Base\ArrayObject|Types\MessageEntity[] $value
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

    public function getDisableNotification(): mixed
    {
        return $this->getFieldValue('disable_notification');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setDisableNotification(mixed $value): static
    {
        return $this->setFieldValue('disable_notification', $value);
    }

    /**
    * @return bool
    */

    public function getProtectContent(): mixed
    {
        return $this->getFieldValue('protect_content');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setProtectContent(mixed $value): static
    {
        return $this->setFieldValue('protect_content', $value);
    }

    /**
    * @return bool
    */

    public function getAllowPaidBroadcast(): mixed
    {
        return $this->getFieldValue('allow_paid_broadcast');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setAllowPaidBroadcast(mixed $value): static
    {
        return $this->setFieldValue('allow_paid_broadcast', $value);
    }

    /**
    * @return string
    */

    public function getMessageEffectId(): mixed
    {
        return $this->getFieldValue('message_effect_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setMessageEffectId(mixed $value): static
    {
        return $this->setFieldValue('message_effect_id', $value);
    }

    /**
    * @return Types\ReplyParameters
    */

    public function getReplyParameters(): mixed
    {
        return $this->getFieldValue('reply_parameters');
    }

    /**
    * @param Types\ReplyParameters $value
    * @return static
    */

    public function setReplyParameters(mixed $value): static
    {
        return $this->setFieldValue('reply_parameters', $value);
    }

    /**
    * @return Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply
    */

    public function getReplyMarkup(): mixed
    {
        return $this->getFieldValue('reply_markup');
    }

    /**
    * @param Types\InlineKeyboardMarkup|Types\ReplyKeyboardMarkup|Types\ReplyKeyboardRemove|Types\ForceReply $value
    * @return static
    */

    public function setReplyMarkup(mixed $value): static
    {
        return $this->setFieldValue('reply_markup', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SendPoll';
    }
}