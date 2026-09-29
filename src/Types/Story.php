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
 * This object represents a story.
 *
 * @link https://core.telegram.org/bots/api#story
 *
 * @property-read Chat|null $chat Required. Chat that posted the story
 * @property-write Chat|array<string, mixed> $chat
 * @property-read int|null $id Required. Unique identifier for the story in the chat
 * @property-write int $id
 */
class Story extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'chat' => [
                'type' => [Chat::class],
                'required' => true,
            ],
            'id' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Chat that posted the story
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getChat(): mixed
    {
        return $this->getFieldValue('chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChat(mixed $value): static
    {
        return $this->setFieldValue('chat', $value);
    }

    /**
     * Required. Unique identifier for the story in the chat
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }
}
