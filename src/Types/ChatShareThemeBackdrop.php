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
 * This object describes a backdrop, which can be used as the background of a theme of the screen for sharing a link to a user or a chat.
 *
 * @link https://core.telegram.org/bots/api#chatsharethemebackdrop
 *
 * @property-read int|null $id Required. Unique identifier of the backdrop
 * @property-write int $id
 * @property-read string|null $name Required. Name of the backdrop
 * @property-write string $name
 * @property-read UniqueGiftBackdropColors|null $colors Required. Colors of the backdrop
 * @property-write UniqueGiftBackdropColors|array<string, mixed> $colors
 */
class ChatShareThemeBackdrop extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'colors' => [
                'type' => [UniqueGiftBackdropColors::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Unique identifier of the backdrop
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Required. Name of the backdrop
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getName(): mixed
    {
        return $this->getFieldValue('name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setName(mixed $value): static
    {
        return $this->setFieldValue('name', $value);
    }

    /**
     * Required. Colors of the backdrop
     *
     * @return UniqueGiftBackdropColors|null
     * @throws Base\TelegramException
     */
    public function getColors(): mixed
    {
        return $this->getFieldValue('colors');
    }

    /**
     * @param UniqueGiftBackdropColors|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setColors(mixed $value): static
    {
        return $this->setFieldValue('colors', $value);
    }
}
