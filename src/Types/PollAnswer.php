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
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * @link https://core.telegram.org/bots/api#pollanswer
 *
 * @property-read string|null $pollId Required. Unique poll identifier
 * @property-write string $pollId
 * @property-read Chat|null $voterChat Optional. The chat that changed the answer to the poll, if the voter is anonymous
 * @property-write Chat|array<string, mixed> $voterChat
 * @property-read User|null $user Optional. The user that changed the answer to the poll, if the voter isn't anonymous
 * @property-write User|array<string, mixed> $user
 * @property-read Base\ArrayObject<Base\ParameterInt> $optionIds Required. 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
 * @property-write list<int>|Base\ArrayObject<Base\ParameterInt> $optionIds
 * @property-read Base\ArrayObject<Base\ParameterString> $optionPersistentIds Required. Persistent identifiers of the chosen answer options. May be empty if the vote was retracted.
 * @property-write list<string>|Base\ArrayObject<Base\ParameterString> $optionPersistentIds
 */
class PollAnswer extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'poll_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'voter_chat' => [
                'type' => [Chat::class],
            ],
            'user' => [
                'type' => [User::class],
            ],
            'option_ids' => [
                'type' => ['int'],
                'isArray' => true,
                'required' => true,
            ],
            'option_persistent_ids' => [
                'type' => ['string'],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Unique poll identifier
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPollId(): mixed
    {
        return $this->getFieldValue('poll_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPollId(mixed $value): static
    {
        return $this->setFieldValue('poll_id', $value);
    }

    /**
     * Optional. The chat that changed the answer to the poll, if the voter is anonymous
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getVoterChat(): mixed
    {
        return $this->getFieldValue('voter_chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVoterChat(mixed $value): static
    {
        return $this->setFieldValue('voter_chat', $value);
    }

    /**
     * Optional. The user that changed the answer to the poll, if the voter isn't anonymous
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getUser(): mixed
    {
        return $this->getFieldValue('user');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUser(mixed $value): static
    {
        return $this->setFieldValue('user', $value);
    }

    /**
     * Required. 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
     *
     * @return Base\ArrayObject<Base\ParameterInt>
     * @throws Base\TelegramException
     */
    public function getOptionIds(): mixed
    {
        return $this->getFieldValue('option_ids');
    }

    /**
     * @param list<int>|Base\ArrayObject<Base\ParameterInt> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOptionIds(mixed $value): static
    {
        return $this->setFieldValue('option_ids', $value);
    }

    /**
     * Required. Persistent identifiers of the chosen answer options. May be empty if the vote was retracted.
     *
     * @return Base\ArrayObject<Base\ParameterString>
     * @throws Base\TelegramException
     */
    public function getOptionPersistentIds(): mixed
    {
        return $this->getFieldValue('option_persistent_ids');
    }

    /**
     * @param list<string>|Base\ArrayObject<Base\ParameterString> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOptionPersistentIds(mixed $value): static
    {
        return $this->setFieldValue('option_persistent_ids', $value);
    }
}
