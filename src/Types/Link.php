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
 * Represents an HTTP link.
 *
 * @link https://core.telegram.org/bots/api#link
 *
 * @property-read string|null $url Required. URL of the link
 * @property-write string $url
 */
class Link extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'url' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. URL of the link
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getUrl(): mixed
    {
        return $this->getFieldValue('url');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUrl(mixed $value): static
    {
        return $this->setFieldValue('url', $value);
    }
}
