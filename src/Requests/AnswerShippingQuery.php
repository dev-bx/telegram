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
use DevBX\Telegram\Payments;

/**
 * If you sent an invoice requesting a shipping address and the parameter *is_flexible* was specified, the Bot API will send an `Update` with a *shipping_query* field to the bot. Use this method to reply to shipping queries. On success, *True* is returned.
 *
 * @link https://core.telegram.org/bots/api#answershippingquery
 *
 * @property-read string|null $shippingQueryId Required. Unique identifier for the query to be answered
 * @property-write string $shippingQueryId
 * @property-read bool|null $ok Required. Pass *True* if delivery to the specified address is possible and *False* if there are any problems (for example, if delivery to the specified address is not possible)
 * @property-write bool $ok
 * @property-read Base\ArrayObject<Payments\ShippingOption> $shippingOptions Optional. Required if *ok* is *True*. A JSON-serialized Array of available shipping options.
 * @property-write list<Payments\ShippingOption|array<string, mixed>>|Base\ArrayObject<Payments\ShippingOption> $shippingOptions
 * @property-read string|null $errorMessage Optional. Required if *ok* is *False*. Error message in human readable form that explains why it is impossible to complete the order (e.g. “Sorry, delivery to your desired address is unavailable”). Telegram will display this message to the user.
 * @property-write string $errorMessage
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class AnswerShippingQuery extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'shipping_query_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'ok' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'shipping_options' => [
                'type' => [Payments\ShippingOption::class],
                'isArray' => true,
            ],
            'error_message' => [
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
    public function getShippingQueryId(): mixed
    {
        return $this->getFieldValue('shipping_query_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShippingQueryId(mixed $value): static
    {
        return $this->setFieldValue('shipping_query_id', $value);
    }

    /**
     * Required. Pass *True* if delivery to the specified address is possible and *False* if there are any problems (for example, if delivery to the specified address is not possible)
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getOk(): mixed
    {
        return $this->getFieldValue('ok');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOk(mixed $value): static
    {
        return $this->setFieldValue('ok', $value);
    }

    /**
     * Optional. Required if *ok* is *True*. A JSON-serialized Array of available shipping options.
     *
     * @return Base\ArrayObject<Payments\ShippingOption>
     * @throws Base\TelegramException
     */
    public function getShippingOptions(): mixed
    {
        return $this->getFieldValue('shipping_options');
    }

    /**
     * @param list<Payments\ShippingOption|array<string, mixed>>|Base\ArrayObject<Payments\ShippingOption> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShippingOptions(mixed $value): static
    {
        return $this->setFieldValue('shipping_options', $value);
    }

    /**
     * Optional. Required if *ok* is *False*. Error message in human readable form that explains why it is impossible to complete the order (e.g. “Sorry, delivery to your desired address is unavailable”). Telegram will display this message to the user.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getErrorMessage(): mixed
    {
        return $this->getFieldValue('error_message');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setErrorMessage(mixed $value): static
    {
        return $this->setFieldValue('error_message', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'answerShippingQuery';
    }
}
