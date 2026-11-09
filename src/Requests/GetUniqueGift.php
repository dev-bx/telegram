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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\Types;

/**
 * Use this method to get information about a unique gift by its name. Returns a `UniqueGift` object on success.
 *
 * @link https://core.telegram.org/bots/api#getuniquegift
 *
 * @property-read string|null $name Required. Unique name of the gift
 * @property-write string $name
 *
 * @method Types\UniqueGift send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class GetUniqueGift extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            '@return' => [
                'type' => [Types\UniqueGift::class],
            ],
        ];
    }

    /**
     * Required. Unique name of the gift
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

    protected function getRequestMethod(): string
    {
        return 'getUniqueGift';
    }
}
