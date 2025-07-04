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

/**
 * Transfers Telegram Stars from the business account balance to the bot's balance. Requires the *can\_transfer\_stars* business bot right. Returns *True* on success.
 * @property string $businessConnectionId
 * Unique identifier of the business connection
 * @property int $starCount
 * Number of Telegram Stars to transfer; 1-10000
 * @method Base\BaseType send(Api $gateway = null)
 */
class TransferBusinessAccountStars extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'star_count' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
    * @return string
    */

    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
    * @return int
    */

    public function getStarCount(): mixed
    {
        return $this->getFieldValue('star_count');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setStarCount(mixed $value): static
    {
        return $this->setFieldValue('star_count', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'TransferBusinessAccountStars';
    }
}