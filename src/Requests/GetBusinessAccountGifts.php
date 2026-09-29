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
 * Returns the gifts received and owned by a managed business account. Requires the *can_view_gifts_and_stars* business bot right. Returns `OwnedGifts` on success.
 *
 * @link https://core.telegram.org/bots/api#getbusinessaccountgifts
 *
 * @property-read string|null $businessConnectionId Required. Unique identifier of the business connection
 * @property-write string $businessConnectionId
 * @property-read bool|null $excludeUnsaved Optional. Pass *True* to exclude gifts that aren't saved to the account's profile page
 * @property-write bool $excludeUnsaved
 * @property-read bool|null $excludeSaved Optional. Pass *True* to exclude gifts that are saved to the account's profile page
 * @property-write bool $excludeSaved
 * @property-read bool|null $excludeUnlimited Optional. Pass *True* to exclude gifts that can be purchased an unlimited number of times
 * @property-write bool $excludeUnlimited
 * @property-read bool|null $excludeLimitedUpgradable Optional. Pass *True* to exclude gifts that can be purchased a limited number of times and can be upgraded to unique
 * @property-write bool $excludeLimitedUpgradable
 * @property-read bool|null $excludeLimitedNonUpgradable Optional. Pass *True* to exclude gifts that can be purchased a limited number of times and can't be upgraded to unique
 * @property-write bool $excludeLimitedNonUpgradable
 * @property-read bool|null $excludeUnique Optional. Pass *True* to exclude unique gifts
 * @property-write bool $excludeUnique
 * @property-read bool|null $excludeFromBlockchain Optional. Pass *True* to exclude gifts that were assigned from the TON blockchain and can't be resold or transferred in Telegram
 * @property-write bool $excludeFromBlockchain
 * @property-read bool|null $sortByPrice Optional. Pass *True* to sort results by gift price instead of send date. Sorting is applied before pagination.
 * @property-write bool $sortByPrice
 * @property-read string|null $offset Optional. Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
 * @property-write string $offset
 * @property-read int|null $limit Optional. The maximum number of gifts to be returned; 1-100. Defaults to 100.
 * @property-write int $limit
 *
 * @method Types\OwnedGifts send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
            'exclude_limited_upgradable' => [
                'type' => ['bool'],
            ],
            'exclude_limited_non_upgradable' => [
                'type' => ['bool'],
            ],
            'exclude_unique' => [
                'type' => ['bool'],
            ],
            'exclude_from_blockchain' => [
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
                'type' => [Types\OwnedGifts::class],
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
     * Optional. Pass *True* to exclude gifts that aren't saved to the account's profile page
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getExcludeUnsaved(): mixed
    {
        return $this->getFieldValue('exclude_unsaved');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExcludeUnsaved(mixed $value): static
    {
        return $this->setFieldValue('exclude_unsaved', $value);
    }

    /**
     * Optional. Pass *True* to exclude gifts that are saved to the account's profile page
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getExcludeSaved(): mixed
    {
        return $this->getFieldValue('exclude_saved');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExcludeSaved(mixed $value): static
    {
        return $this->setFieldValue('exclude_saved', $value);
    }

    /**
     * Optional. Pass *True* to exclude gifts that can be purchased an unlimited number of times
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getExcludeUnlimited(): mixed
    {
        return $this->getFieldValue('exclude_unlimited');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExcludeUnlimited(mixed $value): static
    {
        return $this->setFieldValue('exclude_unlimited', $value);
    }

    /**
     * Optional. Pass *True* to exclude gifts that can be purchased a limited number of times and can be upgraded to unique
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getExcludeLimitedUpgradable(): mixed
    {
        return $this->getFieldValue('exclude_limited_upgradable');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExcludeLimitedUpgradable(mixed $value): static
    {
        return $this->setFieldValue('exclude_limited_upgradable', $value);
    }

    /**
     * Optional. Pass *True* to exclude gifts that can be purchased a limited number of times and can't be upgraded to unique
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getExcludeLimitedNonUpgradable(): mixed
    {
        return $this->getFieldValue('exclude_limited_non_upgradable');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExcludeLimitedNonUpgradable(mixed $value): static
    {
        return $this->setFieldValue('exclude_limited_non_upgradable', $value);
    }

    /**
     * Optional. Pass *True* to exclude unique gifts
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getExcludeUnique(): mixed
    {
        return $this->getFieldValue('exclude_unique');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExcludeUnique(mixed $value): static
    {
        return $this->setFieldValue('exclude_unique', $value);
    }

    /**
     * Optional. Pass *True* to exclude gifts that were assigned from the TON blockchain and can't be resold or transferred in Telegram
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getExcludeFromBlockchain(): mixed
    {
        return $this->getFieldValue('exclude_from_blockchain');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExcludeFromBlockchain(mixed $value): static
    {
        return $this->setFieldValue('exclude_from_blockchain', $value);
    }

    /**
     * Optional. Pass *True* to sort results by gift price instead of send date. Sorting is applied before pagination.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getSortByPrice(): mixed
    {
        return $this->getFieldValue('sort_by_price');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSortByPrice(mixed $value): static
    {
        return $this->setFieldValue('sort_by_price', $value);
    }

    /**
     * Optional. Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getOffset(): mixed
    {
        return $this->getFieldValue('offset');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOffset(mixed $value): static
    {
        return $this->setFieldValue('offset', $value);
    }

    /**
     * Optional. The maximum number of gifts to be returned; 1-100. Defaults to 100.
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
        return 'getBusinessAccountGifts';
    }
}
