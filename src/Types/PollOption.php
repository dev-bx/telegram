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
 *
 * @link https://core.telegram.org/bots/api#polloption
 *
 * @property-read string|null $persistentId Required. Unique identifier of the option, persistent on option addition and deletion
 * @property-write string $persistentId
 * @property-read string|null $text Required. Option text, 1-100 characters
 * @property-write string $text
 * @property-read Base\ArrayObject<MessageEntity> $textEntities Optional. Special entities that appear in the option *text*. Currently, only custom emoji entities are allowed in poll option texts
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $textEntities
 * @property-read PollMedia|null $media Optional. Media added to the poll option
 * @property-write PollMedia|array<string, mixed> $media
 * @property-read int|null $voterCount Required. Number of users who voted for this option; may be 0 if unknown
 * @property-write int $voterCount
 * @property-read User|null $addedByUser Optional. User who added the option; omitted if the option wasn't added by a user after poll creation
 * @property-write User|array<string, mixed> $addedByUser
 * @property-read Chat|null $addedByChat Optional. Chat that added the option; omitted if the option wasn't added by a chat after poll creation
 * @property-write Chat|array<string, mixed> $addedByChat
 * @property-read int|null $additionDate Optional. Point in time (Unix timestamp) when the option was added; omitted if the option existed in the original poll
 * @property-write int $additionDate
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
     * Required. Unique identifier of the option, persistent on option addition and deletion
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPersistentId(): mixed
    {
        return $this->getFieldValue('persistent_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPersistentId(mixed $value): static
    {
        return $this->setFieldValue('persistent_id', $value);
    }

    /**
     * Required. Option text, 1-100 characters
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getText(): mixed
    {
        return $this->getFieldValue('text');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setText(mixed $value): static
    {
        return $this->setFieldValue('text', $value);
    }

    /**
     * Optional. Special entities that appear in the option *text*. Currently, only custom emoji entities are allowed in poll option texts
     *
     * @return Base\ArrayObject<MessageEntity>
     * @throws Base\TelegramException
     */
    public function getTextEntities(): mixed
    {
        return $this->getFieldValue('text_entities');
    }

    /**
     * @param list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTextEntities(mixed $value): static
    {
        return $this->setFieldValue('text_entities', $value);
    }

    /**
     * Optional. Media added to the poll option
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

    /**
     * Required. Number of users who voted for this option; may be 0 if unknown
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getVoterCount(): mixed
    {
        return $this->getFieldValue('voter_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVoterCount(mixed $value): static
    {
        return $this->setFieldValue('voter_count', $value);
    }

    /**
     * Optional. User who added the option; omitted if the option wasn't added by a user after poll creation
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getAddedByUser(): mixed
    {
        return $this->getFieldValue('added_by_user');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAddedByUser(mixed $value): static
    {
        return $this->setFieldValue('added_by_user', $value);
    }

    /**
     * Optional. Chat that added the option; omitted if the option wasn't added by a chat after poll creation
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getAddedByChat(): mixed
    {
        return $this->getFieldValue('added_by_chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAddedByChat(mixed $value): static
    {
        return $this->setFieldValue('added_by_chat', $value);
    }

    /**
     * Optional. Point in time (Unix timestamp) when the option was added; omitted if the option existed in the original poll
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getAdditionDate(): mixed
    {
        return $this->getFieldValue('addition_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAdditionDate(mixed $value): static
    {
        return $this->setFieldValue('addition_date', $value);
    }
}
