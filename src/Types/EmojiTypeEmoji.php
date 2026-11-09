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
 * A regular emoji.
 *
 * @link https://core.telegram.org/bots/api#emojitypeemoji
 *
 * @property-read string|null $type Required. Type of the emoji, always “emoji”
 * @property-write string $type
 * @property-read string|null $emoji Required. The emoji
 * @property-write string $emoji
 */
class EmojiTypeEmoji extends EmojiType
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
                'value' => 'emoji',
                'required' => true,
            ],
            'emoji' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the emoji, always “emoji”
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
     * Required. The emoji
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getEmoji(): mixed
    {
        return $this->getFieldValue('emoji');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEmoji(mixed $value): static
    {
        return $this->setFieldValue('emoji', $value);
    }
}
