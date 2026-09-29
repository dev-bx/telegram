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
use DevBX\Telegram\Stickers;

/**
 * At most **one** of the optional fields can be present in any given object.
 *
 * @link https://core.telegram.org/bots/api#pollmedia
 *
 * @property-read Animation|null $animation Optional. Media is an animation, information about the animation
 * @property-write Animation|array<string, mixed> $animation
 * @property-read Audio|null $audio Optional. Media is an audio file, information about the file; currently, can't be received in a poll option
 * @property-write Audio|array<string, mixed> $audio
 * @property-read Document|null $document Optional. Media is a general file, information about the file; currently, can't be received in a poll option
 * @property-write Document|array<string, mixed> $document
 * @property-read Link|null $link Optional. The HTTP link attached to the poll option
 * @property-write Link|array<string, mixed> $link
 * @property-read LivePhoto|null $livePhoto Optional. Media is a live photo, information about the live photo
 * @property-write LivePhoto|array<string, mixed> $livePhoto
 * @property-read Location|null $location Optional. Media is a shared location, information about the location
 * @property-write Location|array<string, mixed> $location
 * @property-read Base\ArrayObject<PhotoSize> $photo Optional. Media is a photo, available sizes of the photo
 * @property-write list<PhotoSize|array<string, mixed>>|Base\ArrayObject<PhotoSize> $photo
 * @property-read Stickers\Sticker|null $sticker Optional. Media is a sticker, information about the sticker; currently, for poll options only
 * @property-write Stickers\Sticker|array<string, mixed> $sticker
 * @property-read Venue|null $venue Optional. Media is a venue, information about the venue
 * @property-write Venue|array<string, mixed> $venue
 * @property-read Video|null $video Optional. Media is a video, information about the video
 * @property-write Video|array<string, mixed> $video
 */
class PollMedia extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'animation' => [
                'type' => [Animation::class],
            ],
            'audio' => [
                'type' => [Audio::class],
            ],
            'document' => [
                'type' => [Document::class],
            ],
            'link' => [
                'type' => [Link::class],
            ],
            'live_photo' => [
                'type' => [LivePhoto::class],
            ],
            'location' => [
                'type' => [Location::class],
            ],
            'photo' => [
                'type' => [PhotoSize::class],
                'isArray' => true,
            ],
            'sticker' => [
                'type' => [Stickers\Sticker::class],
            ],
            'venue' => [
                'type' => [Venue::class],
            ],
            'video' => [
                'type' => [Video::class],
            ],
        ];
    }

    /**
     * Optional. Media is an animation, information about the animation
     *
     * @return Animation|null
     * @throws Base\TelegramException
     */
    public function getAnimation(): mixed
    {
        return $this->getFieldValue('animation');
    }

    /**
     * @param Animation|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAnimation(mixed $value): static
    {
        return $this->setFieldValue('animation', $value);
    }

    /**
     * Optional. Media is an audio file, information about the file; currently, can't be received in a poll option
     *
     * @return Audio|null
     * @throws Base\TelegramException
     */
    public function getAudio(): mixed
    {
        return $this->getFieldValue('audio');
    }

    /**
     * @param Audio|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAudio(mixed $value): static
    {
        return $this->setFieldValue('audio', $value);
    }

    /**
     * Optional. Media is a general file, information about the file; currently, can't be received in a poll option
     *
     * @return Document|null
     * @throws Base\TelegramException
     */
    public function getDocument(): mixed
    {
        return $this->getFieldValue('document');
    }

    /**
     * @param Document|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDocument(mixed $value): static
    {
        return $this->setFieldValue('document', $value);
    }

    /**
     * Optional. The HTTP link attached to the poll option
     *
     * @return Link|null
     * @throws Base\TelegramException
     */
    public function getLink(): mixed
    {
        return $this->getFieldValue('link');
    }

    /**
     * @param Link|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLink(mixed $value): static
    {
        return $this->setFieldValue('link', $value);
    }

    /**
     * Optional. Media is a live photo, information about the live photo
     *
     * @return LivePhoto|null
     * @throws Base\TelegramException
     */
    public function getLivePhoto(): mixed
    {
        return $this->getFieldValue('live_photo');
    }

    /**
     * @param LivePhoto|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLivePhoto(mixed $value): static
    {
        return $this->setFieldValue('live_photo', $value);
    }

    /**
     * Optional. Media is a shared location, information about the location
     *
     * @return Location|null
     * @throws Base\TelegramException
     */
    public function getLocation(): mixed
    {
        return $this->getFieldValue('location');
    }

    /**
     * @param Location|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLocation(mixed $value): static
    {
        return $this->setFieldValue('location', $value);
    }

    /**
     * Optional. Media is a photo, available sizes of the photo
     *
     * @return Base\ArrayObject<PhotoSize>
     * @throws Base\TelegramException
     */
    public function getPhoto(): mixed
    {
        return $this->getFieldValue('photo');
    }

    /**
     * @param list<PhotoSize|array<string, mixed>>|Base\ArrayObject<PhotoSize> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPhoto(mixed $value): static
    {
        return $this->setFieldValue('photo', $value);
    }

    /**
     * Optional. Media is a sticker, information about the sticker; currently, for poll options only
     *
     * @return Stickers\Sticker|null
     * @throws Base\TelegramException
     */
    public function getSticker(): mixed
    {
        return $this->getFieldValue('sticker');
    }

    /**
     * @param Stickers\Sticker|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSticker(mixed $value): static
    {
        return $this->setFieldValue('sticker', $value);
    }

    /**
     * Optional. Media is a venue, information about the venue
     *
     * @return Venue|null
     * @throws Base\TelegramException
     */
    public function getVenue(): mixed
    {
        return $this->getFieldValue('venue');
    }

    /**
     * @param Venue|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVenue(mixed $value): static
    {
        return $this->setFieldValue('venue', $value);
    }

    /**
     * Optional. Media is a video, information about the video
     *
     * @return Video|null
     * @throws Base\TelegramException
     */
    public function getVideo(): mixed
    {
        return $this->getFieldValue('video');
    }

    /**
     * @param Video|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideo(mixed $value): static
    {
        return $this->setFieldValue('video', $value);
    }
}
