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
 * Use this method to create a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights. Returns information about the created topic as a [ForumTopic](#forumtopic) object.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
 * @property string $name
 * Topic name, 1-128 characters
 * @property int $iconColor
 * Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F)
 * @property string $iconCustomEmojiId
 * Unique identifier of the custom emoji shown as the topic icon. Use [getForumTopicIconStickers](#getforumtopiciconstickers) to get all allowed custom emoji identifiers.
 * @method Types\ForumTopic send(Api $gateway = null)
 */
class CreateForumTopic extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'icon_color' => [
                'type' => ['int'],
            ],
            'icon_custom_emoji_id' => [
                'type' => ['string'],
            ],
            '@return' => [
                'type' => Types\ForumTopic::class,
            ],
        ];
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
    * @return string
    */

    public function getName(): mixed
    {
        return $this->getFieldValue('name');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setName(mixed $value): static
    {
        return $this->setFieldValue('name', $value);
    }

    /**
    * @return int
    */

    public function getIconColor(): mixed
    {
        return $this->getFieldValue('icon_color');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setIconColor(mixed $value): static
    {
        return $this->setFieldValue('icon_color', $value);
    }

    /**
    * @return string
    */

    public function getIconCustomEmojiId(): mixed
    {
        return $this->getFieldValue('icon_custom_emoji_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setIconCustomEmojiId(mixed $value): static
    {
        return $this->setFieldValue('icon_custom_emoji_id', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'CreateForumTopic';
    }
}