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
 * This object describes a unique gift that was upgraded from a regular gift.
 *
 * @link https://core.telegram.org/bots/api#uniquegift
 *
 * @property-read string|null $giftId Required. Identifier of the regular gift from which the gift was upgraded
 * @property-write string $giftId
 * @property-read string|null $baseName Required. Human-readable name of the regular gift from which this unique gift was upgraded
 * @property-write string $baseName
 * @property-read string|null $name Required. Unique name of the gift. This name can be used in `https://t.me/nft/...` links and story areas.
 * @property-write string $name
 * @property-read int|null $number Required. Unique number of the upgraded gift among gifts upgraded from the same regular gift
 * @property-write int $number
 * @property-read UniqueGiftModel|null $model Required. Model of the gift
 * @property-write UniqueGiftModel|array<string, mixed> $model
 * @property-read UniqueGiftSymbol|null $symbol Required. Symbol of the gift
 * @property-write UniqueGiftSymbol|array<string, mixed> $symbol
 * @property-read UniqueGiftBackdrop|null $backdrop Required. Backdrop of the gift
 * @property-write UniqueGiftBackdrop|array<string, mixed> $backdrop
 * @property-read bool|null $isPremium Optional. *True*, if the original regular gift was exclusively purchaseable by Telegram Premium subscribers
 * @property-write bool $isPremium
 * @property-read bool|null $isBurned Optional. *True*, if the gift was used to craft another gift and isn't available anymore
 * @property-write bool $isBurned
 * @property-read bool|null $isFromBlockchain Optional. *True*, if the gift is assigned from the TON blockchain and can't be resold or transferred in Telegram
 * @property-write bool $isFromBlockchain
 * @property-read UniqueGiftColors|null $colors Optional. The color scheme that can be used by the gift's owner for the chat's name, replies to messages and link previews; for business account gifts and gifts that are currently on sale only
 * @property-write UniqueGiftColors|array<string, mixed> $colors
 * @property-read Chat|null $publisherChat Optional. Information about the chat that published the gift
 * @property-write Chat|array<string, mixed> $publisherChat
 */
class UniqueGift extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'gift_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'base_name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'number' => [
                'type' => ['int'],
                'required' => true,
            ],
            'model' => [
                'type' => [UniqueGiftModel::class],
                'required' => true,
            ],
            'symbol' => [
                'type' => [UniqueGiftSymbol::class],
                'required' => true,
            ],
            'backdrop' => [
                'type' => [UniqueGiftBackdrop::class],
                'required' => true,
            ],
            'is_premium' => [
                'type' => ['bool'],
            ],
            'is_burned' => [
                'type' => ['bool'],
            ],
            'is_from_blockchain' => [
                'type' => ['bool'],
            ],
            'colors' => [
                'type' => [UniqueGiftColors::class],
            ],
            'publisher_chat' => [
                'type' => [Chat::class],
            ],
        ];
    }

    /**
     * Required. Identifier of the regular gift from which the gift was upgraded
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getGiftId(): mixed
    {
        return $this->getFieldValue('gift_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGiftId(mixed $value): static
    {
        return $this->setFieldValue('gift_id', $value);
    }

    /**
     * Required. Human-readable name of the regular gift from which this unique gift was upgraded
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBaseName(): mixed
    {
        return $this->getFieldValue('base_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBaseName(mixed $value): static
    {
        return $this->setFieldValue('base_name', $value);
    }

    /**
     * Required. Unique name of the gift. This name can be used in `https://t.me/nft/...` links and story areas.
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
     * Required. Unique number of the upgraded gift among gifts upgraded from the same regular gift
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getNumber(): mixed
    {
        return $this->getFieldValue('number');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setNumber(mixed $value): static
    {
        return $this->setFieldValue('number', $value);
    }

    /**
     * Required. Model of the gift
     *
     * @return UniqueGiftModel|null
     * @throws Base\TelegramException
     */
    public function getModel(): mixed
    {
        return $this->getFieldValue('model');
    }

    /**
     * @param UniqueGiftModel|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setModel(mixed $value): static
    {
        return $this->setFieldValue('model', $value);
    }

    /**
     * Required. Symbol of the gift
     *
     * @return UniqueGiftSymbol|null
     * @throws Base\TelegramException
     */
    public function getSymbol(): mixed
    {
        return $this->getFieldValue('symbol');
    }

    /**
     * @param UniqueGiftSymbol|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSymbol(mixed $value): static
    {
        return $this->setFieldValue('symbol', $value);
    }

    /**
     * Required. Backdrop of the gift
     *
     * @return UniqueGiftBackdrop|null
     * @throws Base\TelegramException
     */
    public function getBackdrop(): mixed
    {
        return $this->getFieldValue('backdrop');
    }

    /**
     * @param UniqueGiftBackdrop|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBackdrop(mixed $value): static
    {
        return $this->setFieldValue('backdrop', $value);
    }

    /**
     * Optional. *True*, if the original regular gift was exclusively purchaseable by Telegram Premium subscribers
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsPremium(): mixed
    {
        return $this->getFieldValue('is_premium');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsPremium(mixed $value): static
    {
        return $this->setFieldValue('is_premium', $value);
    }

    /**
     * Optional. *True*, if the gift was used to craft another gift and isn't available anymore
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsBurned(): mixed
    {
        return $this->getFieldValue('is_burned');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsBurned(mixed $value): static
    {
        return $this->setFieldValue('is_burned', $value);
    }

    /**
     * Optional. *True*, if the gift is assigned from the TON blockchain and can't be resold or transferred in Telegram
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsFromBlockchain(): mixed
    {
        return $this->getFieldValue('is_from_blockchain');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsFromBlockchain(mixed $value): static
    {
        return $this->setFieldValue('is_from_blockchain', $value);
    }

    /**
     * Optional. The color scheme that can be used by the gift's owner for the chat's name, replies to messages and link previews; for business account gifts and gifts that are currently on sale only
     *
     * @return UniqueGiftColors|null
     * @throws Base\TelegramException
     */
    public function getColors(): mixed
    {
        return $this->getFieldValue('colors');
    }

    /**
     * @param UniqueGiftColors|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setColors(mixed $value): static
    {
        return $this->setFieldValue('colors', $value);
    }

    /**
     * Optional. Information about the chat that published the gift
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getPublisherChat(): mixed
    {
        return $this->getFieldValue('publisher_chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPublisherChat(mixed $value): static
    {
        return $this->setFieldValue('publisher_chat', $value);
    }
}
