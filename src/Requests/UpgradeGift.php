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
 * Upgrades a given regular gift to a unique gift. Requires the *can_transfer_and_upgrade_gifts* business bot right. Additionally requires the *can_transfer_stars* business bot right if the upgrade is paid. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#upgradegift
 *
 * @property-read string|null $businessConnectionId Required. Unique identifier of the business connection
 * @property-write string $businessConnectionId
 * @property-read string|null $ownedGiftId Required. Unique identifier of the regular gift that should be upgraded to a unique one
 * @property-write string $ownedGiftId
 * @property-read bool|null $keepOriginalDetails Optional. Pass *True* to keep the original gift text, sender and receiver in the upgraded gift
 * @property-write bool $keepOriginalDetails
 * @property-read int|null $starCount Optional. The amount of Telegram Stars that will be paid for the upgrade from the business account balance. If `gift.prepaid_upgrade_star_count > 0`, then pass 0, otherwise, the *can_transfer_stars* business bot right is required and `gift.upgrade_star_count` must be passed.
 * @property-write int $starCount
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the business connection
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
     * Required. Unique identifier of the regular gift that should be upgraded to a unique one
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getOwnedGiftId(): mixed
    {
        return $this->getFieldValue('owned_gift_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOwnedGiftId(mixed $value): static
    {
        return $this->setFieldValue('owned_gift_id', $value);
    }

    /**
     * Optional. Pass *True* to keep the original gift text, sender and receiver in the upgraded gift
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getKeepOriginalDetails(): mixed
    {
        return $this->getFieldValue('keep_original_details');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setKeepOriginalDetails(mixed $value): static
    {
        return $this->setFieldValue('keep_original_details', $value);
    }

    /**
     * Optional. The amount of Telegram Stars that will be paid for the upgrade from the business account balance. If `gift.prepaid_upgrade_star_count > 0`, then pass 0, otherwise, the *can_transfer_stars* business bot right is required and `gift.upgrade_star_count` must be passed.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getStarCount(): mixed
    {
        return $this->getFieldValue('star_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStarCount(mixed $value): static
    {
        return $this->setFieldValue('star_count', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'upgradeGift';
    }
}
