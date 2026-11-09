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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 * This object represents an NFT in the TON blockchain.
 *
 * @link https://core.telegram.org/bots/api#tonnft
 *
 * @property-read string|null $address Required. Address of the NFT
 * @property-write string $address
 * @property-read string|null $collectionAddress Optional. Address of the collection to which the NFT belongs; omitted if unknown
 * @property-write string $collectionAddress
 * @property-read string|null $index Required. Index of the NFT among all NFTs from the collection as a decimal number
 * @property-write string $index
 * @property-read string|null $name Required. Name of the NFT
 * @property-write string $name
 * @property-read string|null $description Required. Description of the NFT
 * @property-write string $description
 * @property-read Base\ArrayObject<TonNftAttribute> $attributes Optional. Attributes of the NFT
 * @property-write list<TonNftAttribute|array<string, mixed>>|Base\ArrayObject<TonNftAttribute> $attributes
 * @property-read UniqueGift|null $gift Optional. The unique gift corresponding to the NFT
 * @property-write UniqueGift|array<string, mixed> $gift
 */
class TonNft extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'address' => [
                'type' => ['string'],
                'required' => true,
            ],
            'collection_address' => [
                'type' => ['string'],
            ],
            'index' => [
                'type' => ['string'],
                'required' => true,
            ],
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'description' => [
                'type' => ['string'],
                'required' => true,
            ],
            'attributes' => [
                'type' => [TonNftAttribute::class],
                'isArray' => true,
            ],
            'gift' => [
                'type' => [UniqueGift::class],
            ],
        ];
    }

    /**
     * Required. Address of the NFT
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getAddress(): mixed
    {
        return $this->getFieldValue('address');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAddress(mixed $value): static
    {
        return $this->setFieldValue('address', $value);
    }

    /**
     * Optional. Address of the collection to which the NFT belongs; omitted if unknown
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCollectionAddress(): mixed
    {
        return $this->getFieldValue('collection_address');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCollectionAddress(mixed $value): static
    {
        return $this->setFieldValue('collection_address', $value);
    }

    /**
     * Required. Index of the NFT among all NFTs from the collection as a decimal number
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getIndex(): mixed
    {
        return $this->getFieldValue('index');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIndex(mixed $value): static
    {
        return $this->setFieldValue('index', $value);
    }

    /**
     * Required. Name of the NFT
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getName(): mixed
    {
        return $this->getFieldValue('name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setName(mixed $value): static
    {
        return $this->setFieldValue('name', $value);
    }

    /**
     * Required. Description of the NFT
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getDescription(): mixed
    {
        return $this->getFieldValue('description');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDescription(mixed $value): static
    {
        return $this->setFieldValue('description', $value);
    }

    /**
     * Optional. Attributes of the NFT
     *
     * @return Base\ArrayObject<TonNftAttribute>
     * @throws Base\TelegramException
     */
    public function getAttributes(): mixed
    {
        return $this->getFieldValue('attributes');
    }

    /**
     * @param list<TonNftAttribute|array<string, mixed>>|Base\ArrayObject<TonNftAttribute> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAttributes(mixed $value): static
    {
        return $this->setFieldValue('attributes', $value);
    }

    /**
     * Optional. The unique gift corresponding to the NFT
     *
     * @return UniqueGift|null
     * @throws Base\TelegramException
     */
    public function getGift(): mixed
    {
        return $this->getFieldValue('gift');
    }

    /**
     * @param UniqueGift|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGift(mixed $value): static
    {
        return $this->setFieldValue('gift', $value);
    }
}
