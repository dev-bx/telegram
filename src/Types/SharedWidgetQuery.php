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
 * This object represents an incoming query from a forwarded message with a shared widget created by the bot. Use `answerWidgetQuery` to answer the query. Each user can send at most 5 queries per 5 seconds to the bot from all its widgets.
 *
 * @link https://core.telegram.org/bots/api#sharedwidgetquery
 *
 * @property-read string|null $id Required. Unique identifier for this query
 * @property-write string $id
 * @property-read User|null $from Required. Sender
 * @property-write User|array<string, mixed> $from
 * @property-read WidgetQueryType|null $type Required. Type of the query
 * @property-write WidgetQueryType|array<string, mixed> $type
 * @property-read string|null $data Required. Data of the query, 1-64 bytes
 * @property-write string $data
 * @property-read string|null $widgetId Required. Unique identifier of the shared widget, which sent the query
 * @property-write string $widgetId
 */
class SharedWidgetQuery extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'from' => [
                'type' => [User::class],
                'required' => true,
            ],
            'type' => [
                'type' => [WidgetQueryType::class],
                'required' => true,
            ],
            'data' => [
                'type' => ['string'],
                'required' => true,
            ],
            'widget_id' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Unique identifier for this query
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
     * Required. Sender
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getFrom(): mixed
    {
        return $this->getFieldValue('from');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFrom(mixed $value): static
    {
        return $this->setFieldValue('from', $value);
    }

    /**
     * Required. Type of the query
     *
     * @return WidgetQueryType|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param WidgetQueryType|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Required. Data of the query, 1-64 bytes
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
     * Required. Unique identifier of the shared widget, which sent the query
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
}
