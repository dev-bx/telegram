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
 * This object represents the bot's short description.
 *
 * @link https://core.telegram.org/bots/api#botshortdescription
 *
 * @property-read string|null $shortDescription Required. The bot's short description
 * @property-write string $shortDescription
 */
class BotShortDescription extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'short_description' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The bot's short description
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getShortDescription(): mixed
    {
        return $this->getFieldValue('short_description');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShortDescription(mixed $value): static
    {
        return $this->setFieldValue('short_description', $value);
    }
}
