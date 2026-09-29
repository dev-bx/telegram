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
 * This object contains information about one answer option in a poll to be sent.
 *
 * @link https://core.telegram.org/bots/api#inputpolloption
 *
 * @property-read string|null $text Required. Option text, 1-100 characters
 * @property-write string $text
 * @property-read string|null $textParseMode Optional. Mode for parsing entities in the text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details. Currently, only custom emoji entities are allowed.
 * @property-write string $textParseMode
 * @property-read Base\ArrayObject<MessageEntity> $textEntities Optional. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of *text_parse_mode*.
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $textEntities
 * @property-read InputMediaAnimation|InputMediaLink|InputMediaLivePhoto|InputMediaLocation|InputMediaPhoto|InputMediaSticker|InputMediaVenue|InputMediaVideo|null $media Optional. Media added to the poll option
 * @property-write InputMediaAnimation|InputMediaLink|InputMediaLivePhoto|InputMediaLocation|InputMediaPhoto|InputMediaSticker|InputMediaVenue|InputMediaVideo|array<string, mixed> $media
 */
class InputPollOption extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'text' => [
                'type' => ['string'],
                'required' => true,
            ],
            'text_parse_mode' => [
                'type' => ['string'],
            ],
            'text_entities' => [
                'type' => [MessageEntity::class],
                'isArray' => true,
            ],
            'media' => [
                'type' => [InputPollOptionMedia::class],
            ],
        ];
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
     * Optional. Mode for parsing entities in the text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details. Currently, only custom emoji entities are allowed.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTextParseMode(): mixed
    {
        return $this->getFieldValue('text_parse_mode');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTextParseMode(mixed $value): static
    {
        return $this->setFieldValue('text_parse_mode', $value);
    }

    /**
     * Optional. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of *text_parse_mode*.
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
     * @return InputMediaAnimation|InputMediaLink|InputMediaLivePhoto|InputMediaLocation|InputMediaPhoto|InputMediaSticker|InputMediaVenue|InputMediaVideo|null
     * @throws Base\TelegramException
     */
    public function getMedia(): mixed
    {
        return $this->getFieldValue('media');
    }

    /**
     * @param InputMediaAnimation|InputMediaLink|InputMediaLivePhoto|InputMediaLocation|InputMediaPhoto|InputMediaSticker|InputMediaVenue|InputMediaVideo|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMedia(mixed $value): static
    {
        return $this->setFieldValue('media', $value);
    }
}
