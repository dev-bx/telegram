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
 * This object contains information about the color scheme for a user's name, message replies and link previews based on a unique gift.
 *
 * @link https://core.telegram.org/bots/api#uniquegiftcolors
 *
 * @property-read string|null $modelCustomEmojiId Required. Custom emoji identifier of the unique gift's model
 * @property-write string $modelCustomEmojiId
 * @property-read string|null $symbolCustomEmojiId Required. Custom emoji identifier of the unique gift's symbol
 * @property-write string $symbolCustomEmojiId
 * @property-read int|null $lightThemeMainColor Required. Main color used in light themes; RGB format
 * @property-write int $lightThemeMainColor
 * @property-read Base\ArrayObject<Base\ParameterInt> $lightThemeOtherColors Required. List of 1-3 additional colors used in light themes; RGB format
 * @property-write list<int>|Base\ArrayObject<Base\ParameterInt> $lightThemeOtherColors
 * @property-read int|null $darkThemeMainColor Required. Main color used in dark themes; RGB format
 * @property-write int $darkThemeMainColor
 * @property-read Base\ArrayObject<Base\ParameterInt> $darkThemeOtherColors Required. List of 1-3 additional colors used in dark themes; RGB format
 * @property-write list<int>|Base\ArrayObject<Base\ParameterInt> $darkThemeOtherColors
 */
class UniqueGiftColors extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'model_custom_emoji_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'symbol_custom_emoji_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'light_theme_main_color' => [
                'type' => ['int'],
                'required' => true,
            ],
            'light_theme_other_colors' => [
                'type' => ['int'],
                'isArray' => true,
                'required' => true,
            ],
            'dark_theme_main_color' => [
                'type' => ['int'],
                'required' => true,
            ],
            'dark_theme_other_colors' => [
                'type' => ['int'],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Custom emoji identifier of the unique gift's model
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getModelCustomEmojiId(): mixed
    {
        return $this->getFieldValue('model_custom_emoji_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setModelCustomEmojiId(mixed $value): static
    {
        return $this->setFieldValue('model_custom_emoji_id', $value);
    }

    /**
     * Required. Custom emoji identifier of the unique gift's symbol
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSymbolCustomEmojiId(): mixed
    {
        return $this->getFieldValue('symbol_custom_emoji_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSymbolCustomEmojiId(mixed $value): static
    {
        return $this->setFieldValue('symbol_custom_emoji_id', $value);
    }

    /**
     * Required. Main color used in light themes; RGB format
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getLightThemeMainColor(): mixed
    {
        return $this->getFieldValue('light_theme_main_color');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLightThemeMainColor(mixed $value): static
    {
        return $this->setFieldValue('light_theme_main_color', $value);
    }

    /**
     * Required. List of 1-3 additional colors used in light themes; RGB format
     *
     * @return Base\ArrayObject<Base\ParameterInt>
     * @throws Base\TelegramException
     */
    public function getLightThemeOtherColors(): mixed
    {
        return $this->getFieldValue('light_theme_other_colors');
    }

    /**
     * @param list<int>|Base\ArrayObject<Base\ParameterInt> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLightThemeOtherColors(mixed $value): static
    {
        return $this->setFieldValue('light_theme_other_colors', $value);
    }

    /**
     * Required. Main color used in dark themes; RGB format
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDarkThemeMainColor(): mixed
    {
        return $this->getFieldValue('dark_theme_main_color');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDarkThemeMainColor(mixed $value): static
    {
        return $this->setFieldValue('dark_theme_main_color', $value);
    }

    /**
     * Required. List of 1-3 additional colors used in dark themes; RGB format
     *
     * @return Base\ArrayObject<Base\ParameterInt>
     * @throws Base\TelegramException
     */
    public function getDarkThemeOtherColors(): mixed
    {
        return $this->getFieldValue('dark_theme_other_colors');
    }

    /**
     * @param list<int>|Base\ArrayObject<Base\ParameterInt> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDarkThemeOtherColors(mixed $value): static
    {
        return $this->setFieldValue('dark_theme_other_colors', $value);
    }
}
