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
 * Use this method to send an answer to a query from a widget. The query must be answered within 15 seconds. The answer is received only by the widget that sent the query and doesn't change data of the widget; use `editMessageWidgetData` or `editSharedWidgetData` to change it. On success, *True* is returned.
 *
 * @link https://core.telegram.org/bots/api#answerwidgetquery
 *
 * @property-read string|null $widgetQueryId Required. Unique identifier for the query to be answered
 * @property-write string $widgetQueryId
 * @property-read string|null $data Optional. Data to be returned to the widget, 0-1024 bytes
 * @property-write string $data
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class AnswerWidgetQuery extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'widget_query_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'data' => [
                'type' => ['string'],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the query to be answered
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getWidgetQueryId(): mixed
    {
        return $this->getFieldValue('widget_query_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWidgetQueryId(mixed $value): static
    {
        return $this->setFieldValue('widget_query_id', $value);
    }

    /**
     * Optional. Data to be returned to the widget, 0-1024 bytes
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

    protected function getRequestMethod(): string
    {
        return 'answerWidgetQuery';
    }
}
