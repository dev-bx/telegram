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

namespace DevBX\Telegram\RichMessages;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;

/**
 * Describes a media element embedded in an outgoing rich message.
 *
 * @link https://core.telegram.org/bots/api#inputrichmessagemedia
 *
 * @property-read string|null $id Required. Unique identifier of the media used in a `tg://photo?id=`, `tg://video?id=`, `tg://document?id=`, or `tg://audio?id=` link. 1-64 characters, only `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed.
 * @property-write string $id
 * @property-read Types\InputMediaAnimation|Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaPhoto|Types\InputMediaVideo|Types\InputMediaVoiceNote|null $media Required. The media to be sent. Everything except the media itself and its properties is ignored.
 * @property-write Types\InputMediaAnimation|array<string, mixed>|Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaPhoto|Types\InputMediaVideo|Types\InputMediaVoiceNote $media
 */
class InputRichMessageMedia extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'media' => [
                'type' => [Types\InputMediaAnimation::class, Types\InputMediaAudio::class, Types\InputMediaDocument::class, Types\InputMediaPhoto::class, Types\InputMediaVideo::class, Types\InputMediaVoiceNote::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Unique identifier of the media used in a `tg://photo?id=`, `tg://video?id=`, `tg://document?id=`, or `tg://audio?id=` link. 1-64 characters, only `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Required. The media to be sent. Everything except the media itself and its properties is ignored.
     *
     * @return Types\InputMediaAnimation|Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaPhoto|Types\InputMediaVideo|Types\InputMediaVoiceNote|null
     * @throws Base\TelegramException
     */
    public function getMedia(): mixed
    {
        return $this->getFieldValue('media');
    }

    /**
     * @param Types\InputMediaAnimation|array<string, mixed>|Types\InputMediaAudio|Types\InputMediaDocument|Types\InputMediaPhoto|Types\InputMediaVideo|Types\InputMediaVoiceNote $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMedia(mixed $value): static
    {
        return $this->setFieldValue('media', $value);
    }
}
