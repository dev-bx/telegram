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

/**
 * Use this method to edit public data of a shared widget created by the bot. A shared widget can be edited at most once per second. On success, *True* is returned.
 *
 * @link https://core.telegram.org/bots/api#editsharedwidgetdata
 *
 * @property-read string|null $widgetId Required. Unique identifier of the shared widget
 * @property-write string $widgetId
 * @property-read string|null $publicData Required. New public data of the widget, 0-1024 bytes; pass an empty string to remove the public data
 * @property-write string $publicData
 * @property-read int|null $cacheTime Optional. The maximum amount of time in seconds that the public data of the widget may be cached client-side; 5-3600. If omitted, then the current value is kept, which is 30 by default.
 * @property-write int $cacheTime
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class EditSharedWidgetData extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'widget_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'public_data' => [
                'type' => ['string'],
                'required' => true,
            ],
            'cache_time' => [
                'type' => ['int'],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the shared widget
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getWidgetId(): mixed
    {
        return $this->getFieldValue('widget_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWidgetId(mixed $value): static
    {
        return $this->setFieldValue('widget_id', $value);
    }

    /**
     * Required. New public data of the widget, 0-1024 bytes; pass an empty string to remove the public data
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
     * Optional. The maximum amount of time in seconds that the public data of the widget may be cached client-side; 5-3600. If omitted, then the current value is kept, which is 30 by default.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getCacheTime(): mixed
    {
        return $this->getFieldValue('cache_time');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCacheTime(mixed $value): static
    {
        return $this->setFieldValue('cache_time', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'editSharedWidgetData';
    }
}
