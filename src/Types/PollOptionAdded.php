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
 * Describes a service message about an option added to a poll.
 *
 * @link https://core.telegram.org/bots/api#polloptionadded
 *
 * @property-read MaybeInaccessibleMessage|null $pollMessage Optional. Message containing the poll to which the option was added, if known. Note that the `Message` object in this field will not contain the *reply_to_message* field even if it itself is a reply.
 * @property-write MaybeInaccessibleMessage|array<string, mixed> $pollMessage
 * @property-read string|null $optionPersistentId Required. Unique identifier of the added option
 * @property-write string $optionPersistentId
 * @property-read string|null $optionText Required. Option text
 * @property-write string $optionText
 * @property-read Base\ArrayObject<MessageEntity> $optionTextEntities Optional. Special entities that appear in the *option_text*
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $optionTextEntities
 */
class PollOptionAdded extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'poll_message' => [
                'type' => [MaybeInaccessibleMessage::class],
            ],
            'option_persistent_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'option_text' => [
                'type' => ['string'],
                'required' => true,
            ],
            'option_text_entities' => [
                'type' => [MessageEntity::class],
                'isArray' => true,
            ],
        ];
    }

    /**
     * Optional. Message containing the poll to which the option was added, if known. Note that the `Message` object in this field will not contain the *reply_to_message* field even if it itself is a reply.
     *
     * @return MaybeInaccessibleMessage|null
     * @throws Base\TelegramException
     */
    public function getPollMessage(): mixed
    {
        return $this->getFieldValue('poll_message');
    }

    /**
     * @param MaybeInaccessibleMessage|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPollMessage(mixed $value): static
    {
        return $this->setFieldValue('poll_message', $value);
    }

    /**
     * Required. Unique identifier of the added option
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getOptionPersistentId(): mixed
    {
        return $this->getFieldValue('option_persistent_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOptionPersistentId(mixed $value): static
    {
        return $this->setFieldValue('option_persistent_id', $value);
    }

    /**
     * Required. Option text
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getOptionText(): mixed
    {
        return $this->getFieldValue('option_text');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOptionText(mixed $value): static
    {
        return $this->setFieldValue('option_text', $value);
    }

    /**
     * Optional. Special entities that appear in the *option_text*
     *
     * @return Base\ArrayObject<MessageEntity>
     * @throws Base\TelegramException
     */
    public function getOptionTextEntities(): mixed
    {
        return $this->getFieldValue('option_text_entities');
    }

    /**
     * @param list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOptionTextEntities(mixed $value): static
    {
        return $this->setFieldValue('option_text_entities', $value);
    }
}
