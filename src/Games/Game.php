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

namespace DevBX\Telegram\Games;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;

/**
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 *
 * @link https://core.telegram.org/bots/api#game
 *
 * @property-read string|null $title Required. Title of the game
 * @property-write string $title
 * @property-read string|null $description Required. Description of the game
 * @property-write string $description
 * @property-read Base\ArrayObject<Types\PhotoSize> $photo Required. Photo that will be displayed in the game message in chats
 * @property-write list<Types\PhotoSize|array<string, mixed>>|Base\ArrayObject<Types\PhotoSize> $photo
 * @property-read string|null $text Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls `setGameScore`, or manually edited using `editMessageText`. 0-4096 characters.
 * @property-write string $text
 * @property-read Base\ArrayObject<Types\MessageEntity> $textEntities Optional. Special entities that appear in *text*, such as usernames, URLs, bot commands, etc.
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $textEntities
 * @property-read Types\Animation|null $animation Optional. Animation that will be displayed in the game message in chats. Upload via [BotFather](https://t.me/botfather).
 * @property-write Types\Animation|array<string, mixed> $animation
 */
class Game extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'title' => [
                'type' => ['string'],
                'required' => true,
            ],
            'description' => [
                'type' => ['string'],
                'required' => true,
            ],
            'photo' => [
                'type' => [Types\PhotoSize::class],
                'isArray' => true,
                'required' => true,
            ],
            'text' => [
                'type' => ['string'],
            ],
            'text_entities' => [
                'type' => [Types\MessageEntity::class],
                'isArray' => true,
            ],
            'animation' => [
                'type' => [Types\Animation::class],
            ],
        ];
    }

    /**
     * Required. Title of the game
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTitle(): mixed
    {
        return $this->getFieldValue('title');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTitle(mixed $value): static
    {
        return $this->setFieldValue('title', $value);
    }

    /**
     * Required. Description of the game
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
     * Required. Photo that will be displayed in the game message in chats
     *
     * @return Base\ArrayObject<Types\PhotoSize>
     * @throws Base\TelegramException
     */
    public function getPhoto(): mixed
    {
        return $this->getFieldValue('photo');
    }

    /**
     * @param list<Types\PhotoSize|array<string, mixed>>|Base\ArrayObject<Types\PhotoSize> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPhoto(mixed $value): static
    {
        return $this->setFieldValue('photo', $value);
    }

    /**
     * Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls `setGameScore`, or manually edited using `editMessageText`. 0-4096 characters.
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
     * Optional. Special entities that appear in *text*, such as usernames, URLs, bot commands, etc.
     *
     * @return Base\ArrayObject<Types\MessageEntity>
     * @throws Base\TelegramException
     */
    public function getTextEntities(): mixed
    {
        return $this->getFieldValue('text_entities');
    }

    /**
     * @param list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTextEntities(mixed $value): static
    {
        return $this->setFieldValue('text_entities', $value);
    }

    /**
     * Optional. Animation that will be displayed in the game message in chats. Upload via [BotFather](https://t.me/botfather).
     *
     * @return Types\Animation|null
     * @throws Base\TelegramException
     */
    public function getAnimation(): mixed
    {
        return $this->getFieldValue('animation');
    }

    /**
     * @param Types\Animation|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAnimation(mixed $value): static
    {
        return $this->setFieldValue('animation', $value);
    }
}
