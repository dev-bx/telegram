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
 * Contains information about the start page settings of a Telegram Business account.
 *
 * @link https://core.telegram.org/bots/api#businessintro
 *
 * @property-read string|null $title Optional. Title text of the business intro
 * @property-write string $title
 * @property-read string|null $message Optional. Message text of the business intro
 * @property-write string $message
 * @property-read Stickers\Sticker|null $sticker Optional. Sticker of the business intro
 * @property-write Stickers\Sticker|array<string, mixed> $sticker
 */
class BusinessIntro extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'title' => [
                'type' => ['string'],
            ],
            'message' => [
                'type' => ['string'],
            ],
            'sticker' => [
                'type' => [Stickers\Sticker::class],
            ],
        ];
    }

    /**
     * Optional. Title text of the business intro
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

    /**
     * Optional. Message text of the business intro
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getMessage(): mixed
    {
        return $this->getFieldValue('message');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessage(mixed $value): static
    {
        return $this->setFieldValue('message', $value);
    }

    /**
     * Optional. Sticker of the business intro
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
}
