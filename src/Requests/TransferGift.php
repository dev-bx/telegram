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
 * Transfers an owned unique gift to another user. Requires the *can\_transfer\_and\_upgrade\_gifts* business bot right. Requires *can\_transfer\_stars* business bot right if the transfer is paid. Returns *True* on success.
 * @property string $businessConnectionId
 * Unique identifier of the business connection
 * @property string $ownedGiftId
 * Unique identifier of the regular gift that should be transferred
 * @property int $newOwnerChatId
 * Unique identifier of the chat which will own the gift. The chat must be active in the last 24 hours.
 * @property int $starCount
 * The amount of Telegram Stars that will be paid for the transfer from the business account balance. If positive, then the *can\_transfer\_stars* business bot right is required.
 * @method Base\BaseType send(Api $gateway = null)
 */
class TransferGift extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'owned_gift_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'new_owner_chat_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'star_count' => [
                'type' => ['int'],
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
    * @return string
    */

    public function getOwnedGiftId(): mixed
    {
        return $this->getFieldValue('owned_gift_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setOwnedGiftId(mixed $value): static
    {
        return $this->setFieldValue('owned_gift_id', $value);
    }

    /**
    * @return int
    */

    public function getNewOwnerChatId(): mixed
    {
        return $this->getFieldValue('new_owner_chat_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setNewOwnerChatId(mixed $value): static
    {
        return $this->setFieldValue('new_owner_chat_id', $value);
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
        return 'TransferGift';
    }
}