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
 * A block with a voice note, corresponding to the HTML tag `<audio>`.
 *
 * @link https://core.telegram.org/bots/api#richblockvoicenote
 *
 * @property-read string|null $type Required. Type of the block, always “voice_note”
 * @property-write string $type
 * @property-read Types\Voice|null $voiceNote Required. The voice note
 * @property-write Types\Voice|array<string, mixed> $voiceNote
 * @property-read RichBlockCaption|null $caption Optional. Caption of the block
 * @property-write RichBlockCaption|array<string, mixed> $caption
 */
class RichBlockVoiceNote extends RichBlock
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
                'value' => 'voice_note',
                'required' => true,
            ],
            'voice_note' => [
                'type' => [Types\Voice::class],
                'required' => true,
            ],
            'caption' => [
                'type' => [RichBlockCaption::class],
            ],
        ];
    }

    /**
     * Required. Type of the block, always “voice_note”
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
     * Required. The voice note
     *
     * @return Types\Voice|null
     * @throws Base\TelegramException
     */
    public function getVoiceNote(): mixed
    {
        return $this->getFieldValue('voice_note');
    }

    /**
     * @param Types\Voice|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVoiceNote(mixed $value): static
    {
        return $this->setFieldValue('voice_note', $value);
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
