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
 * A block with a music file, corresponding to the HTML tag `<audio>`.
 *
 * @link https://core.telegram.org/bots/api#inputrichblockaudio
 *
 * @property-read string|null $type Required. Type of the block, always “audio”
 * @property-write string $type
 * @property-read Types\InputMediaAudio|null $audio Required. The audio. Caption is ignored.
 * @property-write Types\InputMediaAudio|array<string, mixed> $audio
 * @property-read RichBlockCaption|null $caption Optional. Caption of the block
 * @property-write RichBlockCaption|array<string, mixed> $caption
 */
class InputRichBlockAudio extends InputRichBlock
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
            'audio' => [
                'type' => [Types\InputMediaAudio::class],
                'required' => true,
            ],
            'caption' => [
                'type' => [RichBlockCaption::class],
            ],
        ];
    }

    /**
     * Required. Type of the block, always “audio”
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
     * Required. The audio. Caption is ignored.
     *
     * @return Types\InputMediaAudio|null
     * @throws Base\TelegramException
     */
    public function getAudio(): mixed
    {
        return $this->getFieldValue('audio');
    }

    /**
     * @param Types\InputMediaAudio|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAudio(mixed $value): static
    {
        return $this->setFieldValue('audio', $value);
    }

    /**
     * Optional. Caption of the block
     *
     * @return RichBlockCaption|null
     * @throws Base\TelegramException
     */
    public function getCaption(): mixed
    {
        return $this->getFieldValue('caption');
    }

    /**
     * @param RichBlockCaption|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaption(mixed $value): static
    {
        return $this->setFieldValue('caption', $value);
    }
}
