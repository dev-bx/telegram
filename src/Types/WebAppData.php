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
 * Describes data sent from a [Web App](https://core.telegram.org/bots/webapps) to the bot.
 *
 * @link https://core.telegram.org/bots/api#webappdata
 *
 * @property-read string|null $data Required. The data. Be aware that a bad client can send arbitrary data in this field.
 * @property-write string $data
 * @property-read string|null $buttonText Required. Text of the *web_app* keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
 * @property-write string $buttonText
 */
class WebAppData extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'data' => [
                'type' => ['string'],
                'required' => true,
            ],
            'button_text' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The data. Be aware that a bad client can send arbitrary data in this field.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getData(): mixed
    {
        return $this->getFieldValue('data');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setData(mixed $value): static
    {
        return $this->setFieldValue('data', $value);
    }

    /**
     * Required. Text of the *web_app* keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getButtonText(): mixed
    {
        return $this->getFieldValue('button_text');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setButtonText(mixed $value): static
    {
        return $this->setFieldValue('button_text', $value);
    }
}
