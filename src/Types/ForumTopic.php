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
 * This object represents a forum topic.
 *
 * @link https://core.telegram.org/bots/api#forumtopic
 *
 * @property-read int|null $messageThreadId Required. Unique identifier of the forum topic
 * @property-write int $messageThreadId
 * @property-read string|null $name Required. Name of the topic
 * @property-write string $name
 * @property-read int|null $iconColor Required. Color of the topic icon in RGB format
 * @property-write int $iconColor
 * @property-read string|null $iconCustomEmojiId Optional. Unique identifier of the custom emoji shown as the topic icon
 * @property-write string $iconCustomEmojiId
 * @property-read bool|null $isNameImplicit Optional. *True*, if the name of the topic wasn't specified explicitly by its creator and likely needs to be changed by the bot
 * @property-write bool $isNameImplicit
 */
class ForumTopic extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'message_thread_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'icon_color' => [
                'type' => ['int'],
                'required' => true,
            ],
            'icon_custom_emoji_id' => [
                'type' => ['string'],
            ],
            'is_name_implicit' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the forum topic
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
     * Required. Name of the topic
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getName(): mixed
    {
        return $this->getFieldValue('name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setName(mixed $value): static
    {
        return $this->setFieldValue('name', $value);
    }

    /**
     * Required. Color of the topic icon in RGB format
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getIconColor(): mixed
    {
        return $this->getFieldValue('icon_color');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIconColor(mixed $value): static
    {
        return $this->setFieldValue('icon_color', $value);
    }

    /**
     * Optional. Unique identifier of the custom emoji shown as the topic icon
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getIconCustomEmojiId(): mixed
    {
        return $this->getFieldValue('icon_custom_emoji_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIconCustomEmojiId(mixed $value): static
    {
        return $this->setFieldValue('icon_custom_emoji_id', $value);
    }

    /**
     * Optional. *True*, if the name of the topic wasn't specified explicitly by its creator and likely needs to be changed by the bot
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsNameImplicit(): mixed
    {
        return $this->getFieldValue('is_name_implicit');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsNameImplicit(mixed $value): static
    {
        return $this->setFieldValue('is_name_implicit', $value);
    }
}
