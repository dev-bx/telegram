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
 * Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of an `Update` with the field *pre_checkout_query*. Use this method to respond to such pre-checkout queries. On success, *True* is returned. **Note:** The Bot API must receive an answer within 10 seconds after the pre-checkout query was sent.
 *
 * @link https://core.telegram.org/bots/api#answerprecheckoutquery
 *
 * @property-read string|null $preCheckoutQueryId Required. Unique identifier for the query to be answered
 * @property-write string $preCheckoutQueryId
 * @property-read bool|null $ok Required. Specify *True* if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order. Use *False* if there are any problems.
 * @property-write bool $ok
 * @property-read string|null $errorMessage Optional. Required if *ok* is *False*. Error message in human readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to the user.
 * @property-write string $errorMessage
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class AnswerPreCheckoutQuery extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'pre_checkout_query_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'ok' => [
                'type' => ['bool'],
                'required' => true,
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
    public function getPreCheckoutQueryId(): mixed
    {
        return $this->getFieldValue('pre_checkout_query_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPreCheckoutQueryId(mixed $value): static
    {
        return $this->setFieldValue('pre_checkout_query_id', $value);
    }

    /**
     * Required. Specify *True* if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order. Use *False* if there are any problems.
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
     * Optional. Required if *ok* is *False*. Error message in human readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to the user.
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
        return 'answerPreCheckoutQuery';
    }
}
