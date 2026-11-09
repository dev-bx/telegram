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
 * The theme based on a unique gift owned by the user or the chat.
 *
 * @link https://core.telegram.org/bots/api#chatsharethemeuniquegift
 *
 * @property-read string|null $type Required. Type of the theme, always “unique_gift”
 * @property-write string $type
 * @property-read UniqueGift|null $gift Required. The gift
 * @property-write UniqueGift|array<string, mixed> $gift
 */
class ChatShareThemeUniqueGift extends ChatShareTheme
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
                'value' => 'unique_gift',
                'required' => true,
            ],
            'gift' => [
                'type' => [UniqueGift::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the theme, always “unique_gift”
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
     * Required. The gift
     *
     * @return UniqueGift|null
     * @throws Base\TelegramException
     */
    public function getGift(): mixed
    {
        return $this->getFieldValue('gift');
    }

    /**
     * @param UniqueGift|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGift(mixed $value): static
    {
        return $this->setFieldValue('gift', $value);
    }
}
