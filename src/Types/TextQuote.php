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
 * This object contains information about the quoted part of a message that is replied to by the given message.
 *
 * @link https://core.telegram.org/bots/api#textquote
 *
 * @property-read string|null $text Required. Text of the quoted part of a message that is replied to by the given message
 * @property-write string $text
 * @property-read Base\ArrayObject<MessageEntity> $entities Optional. Special entities that appear in the quote. Currently, only *bold*, *italic*, *underline*, *strikethrough*, *spoiler*, *custom_emoji*, and *date_time* entities are kept in quotes.
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $entities
 * @property-read int|null $position Required. Approximate quote position in the original message in UTF-16 code units as specified by the sender
 * @property-write int $position
 * @property-read bool|null $isManual Optional. *True*, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.
 * @property-write bool $isManual
 */
class TextQuote extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'text' => [
                'type' => ['string'],
                'required' => true,
            ],
            'entities' => [
                'type' => [MessageEntity::class],
                'isArray' => true,
            ],
            'position' => [
                'type' => ['int'],
                'required' => true,
            ],
            'is_manual' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Text of the quoted part of a message that is replied to by the given message
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
     * Optional. Special entities that appear in the quote. Currently, only *bold*, *italic*, *underline*, *strikethrough*, *spoiler*, *custom_emoji*, and *date_time* entities are kept in quotes.
     *
     * @return Base\ArrayObject<MessageEntity>
     * @throws Base\TelegramException
     */
    public function getEntities(): mixed
    {
        return $this->getFieldValue('entities');
    }

    /**
     * @param list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEntities(mixed $value): static
    {
        return $this->setFieldValue('entities', $value);
    }

    /**
     * Required. Approximate quote position in the original message in UTF-16 code units as specified by the sender
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPosition(): mixed
    {
        return $this->getFieldValue('position');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPosition(mixed $value): static
    {
        return $this->setFieldValue('position', $value);
    }

    /**
     * Optional. *True*, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsManual(): mixed
    {
        return $this->getFieldValue('is_manual');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsManual(mixed $value): static
    {
        return $this->setFieldValue('is_manual', $value);
    }
}
