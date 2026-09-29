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
 * This object represents the bot's description.
 *
 * @link https://core.telegram.org/bots/api#botdescription
 *
 * @property-read string|null $description Required. The bot's description
 * @property-write string $description
 */
class BotDescription extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'description' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The bot's description
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getDescription(): mixed
    {
        return $this->getFieldValue('description');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDescription(mixed $value): static
    {
        return $this->setFieldValue('description', $value);
    }
}
