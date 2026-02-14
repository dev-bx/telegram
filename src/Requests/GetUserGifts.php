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
use DevBX\Telegram\Types;

/**
 * Returns the gifts owned and hosted by a user. Returns [OwnedGifts](#ownedgifts) on success.
 * @property int $userId
 * Unique identifier of the user
 * @property bool $excludeUnlimited
 * Pass *True* to exclude gifts that can be purchased an unlimited number of times
 * @property bool $excludeLimitedUpgradable
 * Pass *True* to exclude gifts that can be purchased a limited number of times and can be upgraded to unique
 * @property bool $excludeLimitedNonUpgradable
 * Pass *True* to exclude gifts that can be purchased a limited number of times and can't be upgraded to unique
 * @property bool $excludeFromBlockchain
 * Pass *True* to exclude gifts that were assigned from the TON blockchain and can't be resold or transferred in Telegram
 * @property bool $excludeUnique
 * Pass *True* to exclude unique gifts
 * @property bool $sortByPrice
 * Pass *True* to sort results by gift price instead of send date. Sorting is applied before pagination.
 * @property string $offset
 * Offset of the first entry to return as received from the previous request; use an empty string to get the first chunk of results
 * @property int $limit
 * The maximum number of gifts to be returned; 1-100. Defaults to 100
 * @method Types\OwnedGifts send(Api $gateway = null)
 */
class GetUserGifts extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'exclude_unlimited' => [
                'type' => ['bool'],
            ],
            'exclude_limited_upgradable' => [
                'type' => ['bool'],
            ],
            'exclude_limited_non_upgradable' => [
                'type' => ['bool'],
            ],
            'exclude_from_blockchain' => [
                'type' => ['bool'],
            ],
            'exclude_unique' => [
                'type' => ['bool'],
            ],
            'sort_by_price' => [
                'type' => ['bool'],
            ],
            'offset' => [
                'type' => ['string'],
            ],
            'limit' => [
                'type' => ['int'],
            ],
            '@return' => [
                'type' => Types\OwnedGifts::class,
            ],
        ];
    }

    /**
    * @return int
    */

    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
    * @return bool
    */

    public function getExcludeUnlimited(): mixed
    {
        return $this->getFieldValue('exclude_unlimited');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setExcludeUnlimited(mixed $value): static
    {
        return $this->setFieldValue('exclude_unlimited', $value);
    }

    /**
    * @return bool
    */

    public function getExcludeLimitedUpgradable(): mixed
    {
        return $this->getFieldValue('exclude_limited_upgradable');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setExcludeLimitedUpgradable(mixed $value): static
    {
        return $this->setFieldValue('exclude_limited_upgradable', $value);
    }

    /**
    * @return bool
    */

    public function getExcludeLimitedNonUpgradable(): mixed
    {
        return $this->getFieldValue('exclude_limited_non_upgradable');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setExcludeLimitedNonUpgradable(mixed $value): static
    {
        return $this->setFieldValue('exclude_limited_non_upgradable', $value);
    }

    /**
    * @return bool
    */

    public function getExcludeFromBlockchain(): mixed
    {
        return $this->getFieldValue('exclude_from_blockchain');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setExcludeFromBlockchain(mixed $value): static
    {
        return $this->setFieldValue('exclude_from_blockchain', $value);
    }

    /**
    * @return bool
    */

    public function getExcludeUnique(): mixed
    {
        return $this->getFieldValue('exclude_unique');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setExcludeUnique(mixed $value): static
    {
        return $this->setFieldValue('exclude_unique', $value);
    }

    /**
    * @return bool
    */

    public function getSortByPrice(): mixed
    {
        return $this->getFieldValue('sort_by_price');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setSortByPrice(mixed $value): static
    {
        return $this->setFieldValue('sort_by_price', $value);
    }

    /**
    * @return string
    */

    public function getOffset(): mixed
    {
        return $this->getFieldValue('offset');
    }

    /**
    * @param string $value
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
        return 'GetUserGifts';
    }
}