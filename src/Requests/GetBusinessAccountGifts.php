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
use DevBX\Telegram\Types;

/**
 * Returns the gifts received and owned by a managed business account. Requires the *can\_view\_gifts\_and\_stars* business bot right. Returns [OwnedGifts](#ownedgifts) on success.
 * @property string $businessConnectionId
 * Unique identifier of the business connection
 * @property bool $excludeUnsaved
 * Pass *True* to exclude gifts that aren't saved to the account's profile page
 * @property bool $excludeSaved
 * Pass *True* to exclude gifts that are saved to the account's profile page
 * @property bool $excludeUnlimited
 * Pass *True* to exclude gifts that can be purchased an unlimited number of times
 * @property bool $excludeLimited
 * Pass *True* to exclude gifts that can be purchased a limited number of times
 * @property bool $excludeUnique
 * Pass *True* to exclude unique gifts
 * @property bool $sortByPrice
 * Pass *True* to sort results by gift price instead of send date. Sorting is applied before pagination.
 * @property string $offset
 * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
 * @property int $limit
 * The maximum number of gifts to be returned; 1-100. Defaults to 100
 * @method Types\OwnedGifts send(Api $gateway = null)
 */
class GetBusinessAccountGifts extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'exclude_unsaved' => [
                'type' => ['bool'],
            ],
            'exclude_saved' => [
                'type' => ['bool'],
            ],
            'exclude_unlimited' => [
                'type' => ['bool'],
            ],
            'exclude_limited' => [
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
    * @return bool
    */

    public function getExcludeUnsaved(): mixed
    {
        return $this->getFieldValue('exclude_unsaved');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setExcludeUnsaved(mixed $value): static
    {
        return $this->setFieldValue('exclude_unsaved', $value);
    }

    /**
    * @return bool
    */

    public function getExcludeSaved(): mixed
    {
        return $this->getFieldValue('exclude_saved');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setExcludeSaved(mixed $value): static
    {
        return $this->setFieldValue('exclude_saved', $value);
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

    public function getExcludeLimited(): mixed
    {
        return $this->getFieldValue('exclude_limited');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setExcludeLimited(mixed $value): static
    {
        return $this->setFieldValue('exclude_limited', $value);
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
        return 'GetBusinessAccountGifts';
    }
}