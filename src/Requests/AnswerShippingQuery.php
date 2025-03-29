<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2025 Kubeev Ruslan
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
 * If you sent an invoice requesting a shipping address and the parameter *is\_flexible* was specified, the Bot API will send an [Update](#update) with a *shipping\_query* field to the bot. Use this method to reply to shipping queries. On success, *True* is returned.
 * @property string $shippingQueryId
 * Unique identifier for the query to be answered
 * @property bool $ok
 * Pass *True* if delivery to the specified address is possible and *False* if there are any problems (for example, if delivery to the specified address is not possible)
 * @property Base\ArrayObject|Payments\ShippingOption[] $shippingOptions
 * Required if *ok* is *True*. A JSON-serialized array of available shipping options.
 * @property string $errorMessage
 * Required if *ok* is *False*. Error message in human readable form that explains why it is impossible to complete the order (e.g. “Sorry, delivery to your desired address is unavailable”). Telegram will display this message to the user.
 * @method Base\ParameterBool send(Api $gateway = null)
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
                'type' => Base\ParameterBool::class,
            ],
        ];
    }

    /**
    * @return string
    */

    public function getShippingQueryId(): mixed
    {
        return $this->getFieldValue('shipping_query_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setShippingQueryId(mixed $value): static
    {
        return $this->setFieldValue('shipping_query_id', $value);
    }

    /**
    * @return bool
    */

    public function getOk(): mixed
    {
        return $this->getFieldValue('ok');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setOk(mixed $value): static
    {
        return $this->setFieldValue('ok', $value);
    }

    /**
    * @return Base\ArrayObject|Payments\ShippingOption[]
    */

    public function getShippingOptions(): mixed
    {
        return $this->getFieldValue('shipping_options');
    }

    /**
    * @param Base\ArrayObject|Payments\ShippingOption[] $value
    * @return static
    */

    public function setShippingOptions(mixed $value): static
    {
        return $this->setFieldValue('shipping_options', $value);
    }

    /**
    * @return string
    */

    public function getErrorMessage(): mixed
    {
        return $this->getFieldValue('error_message');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setErrorMessage(mixed $value): static
    {
        return $this->setFieldValue('error_message', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'AnswerShippingQuery';
    }
}