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
 * Returns the bot's Telegram Star transactions in chronological order. On success, returns a [StarTransactions](#startransactions) object.
 * @property int $offset
 * Number of transactions to skip in the response
 * @property int $limit
 * The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to 100.
 * @method Payments\StarTransactions send(Api $gateway = null)
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
                'type' => Payments\StarTransactions::class,
            ],
        ];
    }

    /**
    * @return int
    */

    public function getOffset(): mixed
    {
        return $this->getFieldValue('offset');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setOffset(mixed $value): static
    {
        return $this->setFieldValue('offset', $value);
    }

    /**
    * @return int
    */

    public function getLimit(): mixed
    {
        return $this->getFieldValue('limit');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setLimit(mixed $value): static
    {
        return $this->setFieldValue('limit', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'GetStarTransactions';
    }
}