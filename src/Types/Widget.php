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
 * This object describes an [HTML widget](https://core.telegram.org/bots/widgets).
 *
 * @link https://core.telegram.org/bots/api#widget
 *
 * @property-read string|null $id Optional. Unique identifier of the shared widget, which can be used to send the widget again using the method `sendSharedWidget`; omitted if the widget isn't shared
 * @property-write string $id
 * @property-read int|null $width Optional. Width of the widget in logical pixels; omitted if the widget must occupy the whole width of the message bubble
 * @property-write int $width
 * @property-read int|null $height Optional. Height of the widget in logical pixels; omitted if the height of the widget isn't fixed
 * @property-write int $height
 * @property-read string|null $html Required. HTML code of the widget
 * @property-write string $html
 * @property-read string|null $publicData Optional. Public data of the widget, which is available wherever the widget is shown. All messages with a shared widget have the same public data.
 * @property-write string $publicData
 * @property-read string|null $chatData Optional. Data of the widget, which is specific to the message
 * @property-write string $chatData
 */
class Widget extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['string'],
            ],
            'width' => [
                'type' => ['int'],
            ],
            'height' => [
                'type' => ['int'],
            ],
            'html' => [
                'type' => ['string'],
                'required' => true,
            ],
            'public_data' => [
                'type' => ['string'],
            ],
            'chat_data' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Optional. Unique identifier of the shared widget, which can be used to send the widget again using the method `sendSharedWidget`; omitted if the widget isn't shared
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getId(): mixed
    {
        return $this->getFieldValue('id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setId(mixed $value): static
    {
        return $this->setFieldValue('id', $value);
    }

    /**
     * Optional. Width of the widget in logical pixels; omitted if the widget must occupy the whole width of the message bubble
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getWidth(): mixed
    {
        return $this->getFieldValue('width');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWidth(mixed $value): static
    {
        return $this->setFieldValue('width', $value);
    }

    /**
     * Optional. Height of the widget in logical pixels; omitted if the height of the widget isn't fixed
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getHeight(): mixed
    {
        return $this->getFieldValue('height');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHeight(mixed $value): static
    {
        return $this->setFieldValue('height', $value);
    }

    /**
     * Required. HTML code of the widget
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getHtml(): mixed
    {
        return $this->getFieldValue('html');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHtml(mixed $value): static
    {
        return $this->setFieldValue('html', $value);
    }

    /**
     * Optional. Public data of the widget, which is available wherever the widget is shown. All messages with a shared widget have the same public data.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPublicData(): mixed
    {
        return $this->getFieldValue('public_data');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPublicData(mixed $value): static
    {
        return $this->setFieldValue('public_data', $value);
    }

    /**
     * Optional. Data of the widget, which is specific to the message
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getChatData(): mixed
    {
        return $this->getFieldValue('chat_data');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatData(mixed $value): static
    {
        return $this->setFieldValue('chat_data', $value);
    }
}
