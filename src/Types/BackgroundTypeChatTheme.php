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
 * The background is taken directly from a built-in chat theme.
 *
 * @link https://core.telegram.org/bots/api#backgroundtypechattheme
 *
 * @property-read string|null $type Required. Type of the background, always “chat_theme”
 * @property-write string $type
 * @property-read string|null $themeName Required. Name of the chat theme, which is usually an emoji
 * @property-write string $themeName
 */
class BackgroundTypeChatTheme extends BackgroundType
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
                'value' => 'chat_theme',
                'required' => true,
            ],
            'theme_name' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the background, always “chat_theme”
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
     * Required. Name of the chat theme, which is usually an emoji
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getThemeName(): mixed
    {
        return $this->getFieldValue('theme_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setThemeName(mixed $value): static
    {
        return $this->setFieldValue('theme_name', $value);
    }
}
