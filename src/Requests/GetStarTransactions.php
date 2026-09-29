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
 * Returns the bot's Telegram Star transactions in chronological order. On success, returns a `StarTransactions` object.
 *
 * @link https://core.telegram.org/bots/api#getstartransactions
 *
 * @property-read int|null $offset Optional. Number of transactions to skip in the response
 * @property-write int $offset
 * @property-read int|null $limit Optional. The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to 100.
 * @property-write int $limit
 *
 * @method Payments\StarTransactions send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class GetStarTransactions extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'offset' => [
                'type' => ['int'],
            ],
            'limit' => [
                'type' => ['int'],
            ],
            '@return' => [
                'type' => [Payments\StarTransactions::class],
            ],
        ];
    }

    /**
     * Optional. Number of transactions to skip in the response
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getOffset(): mixed
    {
        return $this->getFieldValue('offset');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOffset(mixed $value): static
    {
        return $this->setFieldValue('offset', $value);
    }

    /**
     * Optional. The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getLimit(): mixed
    {
        return $this->getFieldValue('limit');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLimit(mixed $value): static
    {
        return $this->setFieldValue('limit', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'getStarTransactions';
    }
}
