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
 * Upgrades a given regular gift to a unique gift. Requires the *can\_transfer\_and\_upgrade\_gifts* business bot right. Additionally requires the *can\_transfer\_stars* business bot right if the upgrade is paid. Returns *True* on success.
 * @property string $businessConnectionId
 * Unique identifier of the business connection
 * @property string $ownedGiftId
 * Unique identifier of the regular gift that should be upgraded to a unique one
 * @property bool $keepOriginalDetails
 * Pass *True* to keep the original gift text, sender and receiver in the upgraded gift
 * @property int $starCount
 * The amount of Telegram Stars that will be paid for the upgrade from the business account balance. If `gift.prepaid_upgrade_star_count > 0`, then pass 0, otherwise, the *can\_transfer\_stars* business bot right is required and `gift.upgrade_star_count` must be passed.
 * @method Base\BaseType send(Api $gateway = null)
 */
class UpgradeGift extends Base\Request
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
            'keep_original_details' => [
                'type' => ['bool'],
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
    * @return bool
    */

    public function getKeepOriginalDetails(): mixed
    {
        return $this->getFieldValue('keep_original_details');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setKeepOriginalDetails(mixed $value): static
    {
        return $this->setFieldValue('keep_original_details', $value);
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
        return 'UpgradeGift';
    }
}