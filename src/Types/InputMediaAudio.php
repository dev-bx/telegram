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
 * Represents an audio file to be treated as music to be sent.
 *
 * @link https://core.telegram.org/bots/api#inputmediaaudio
 *
 * @property-read string|null $type Required. Type of the media, must be *audio*
 * @property-write string $type
 * @property-read string|null $media Required. File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
 * @property-write string $media
 * @property-read string|null $thumbnail Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
 * @property-write string $thumbnail
 * @property-read string|null $caption Optional. Caption of the audio to be sent, 0-1024 characters after entities parsing
 * @property-write string $caption
 * @property-read string|null $parseMode Optional. Mode for parsing entities in the audio caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $parseMode
 * @property-read Base\ArrayObject<MessageEntity> $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of *parse_mode*
 * @property-write list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $captionEntities
 * @property-read int|null $duration Optional. Duration of the audio in seconds
 * @property-write int $duration
 * @property-read string|null $performer Optional. Performer of the audio
 * @property-write string $performer
 * @property-read string|null $title Optional. Title of the audio
 * @property-write string $title
 */
class InputMediaAudio extends InputMedia
{
    /**
     * @return static
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [
            'type' => [
                'type' => ['string'],
                'value' => 'audio',
                'required' => true,
            ],
            'media' => [
                'type' => ['string'],
                'required' => true,
            ],
            'thumbnail' => [
                'type' => ['string'],
            ],
            'caption' => [
                'type' => ['string'],
            ],
            'parse_mode' => [
                'type' => ['string'],
            ],
            'caption_entities' => [
                'type' => [MessageEntity::class],
                'isArray' => true,
            ],
            'duration' => [
                'type' => ['int'],
            ],
            'performer' => [
                'type' => ['string'],
            ],
            'title' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. Type of the media, must be *audio*
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Required. File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getMedia(): mixed
    {
        return $this->getFieldValue('media');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMedia(mixed $value): static
    {
        return $this->setFieldValue('media', $value);
    }

    /**
     * Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More information on Sending Files »](https://core.telegram.org/bots/api#sending-files)
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getThumbnail(): mixed
    {
        return $this->getFieldValue('thumbnail');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setThumbnail(mixed $value): static
    {
        return $this->setFieldValue('thumbnail', $value);
    }

    /**
     * Optional. Caption of the audio to be sent, 0-1024 characters after entities parsing
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCaption(): mixed
    {
        return $this->getFieldValue('caption');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaption(mixed $value): static
    {
        return $this->setFieldValue('caption', $value);
    }

    /**
     * Optional. Mode for parsing entities in the audio caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getParseMode(): mixed
    {
        return $this->getFieldValue('parse_mode');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setParseMode(mixed $value): static
    {
        return $this->setFieldValue('parse_mode', $value);
    }

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *
     * @return Base\ArrayObject<MessageEntity>
     * @throws Base\TelegramException
     */
    public function getCaptionEntities(): mixed
    {
        return $this->getFieldValue('caption_entities');
    }

    /**
     * @param list<MessageEntity|array<string, mixed>>|Base\ArrayObject<MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaptionEntities(mixed $value): static
    {
        return $this->setFieldValue('caption_entities', $value);
    }

    /**
     * Optional. Duration of the audio in seconds
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDuration(): mixed
    {
        return $this->getFieldValue('duration');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDuration(mixed $value): static
    {
        return $this->setFieldValue('duration', $value);
    }

    /**
     * Optional. Performer of the audio
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPerformer(): mixed
    {
        return $this->getFieldValue('performer');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPerformer(mixed $value): static
    {
        return $this->setFieldValue('performer', $value);
    }

    /**
     * Optional. Title of the audio
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
}
