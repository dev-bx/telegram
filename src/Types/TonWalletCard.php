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
 * This object describes a TON wallet card, which is shown on the profile page of a user to everyone.
 *
 * @link https://core.telegram.org/bots/api#tonwalletcard
 *
 * @property-read string|null $address Required. Address of the wallet
 * @property-write string $address
 * @property-read string|null $amount Required. Balance of the wallet, in the *smallest units* of the cryptocurrency, as a decimal number
 * @property-write string $amount
 * @property-read Base\ArrayObject<TonWalletCardSticker> $stickers Required. Stickers placed on the card
 * @property-write list<TonWalletCardSticker|array<string, mixed>>|Base\ArrayObject<TonWalletCardSticker> $stickers
 * @property-read string|null $backgroundNftAddress Optional. Address of the NFT of one of the stickers, whose colors must be used for the card background; omitted if the default background must be used
 * @property-write string $backgroundNftAddress
 */
class TonWalletCard extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'address' => [
                'type' => ['string'],
                'required' => true,
            ],
            'amount' => [
                'type' => ['string'],
                'required' => true,
            ],
            'stickers' => [
                'type' => [TonWalletCardSticker::class],
                'isArray' => true,
                'required' => true,
            ],
            'background_nft_address' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. Address of the wallet
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
     * Required. Balance of the wallet, in the *smallest units* of the cryptocurrency, as a decimal number
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getAmount(): mixed
    {
        return $this->getFieldValue('amount');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAmount(mixed $value): static
    {
        return $this->setFieldValue('amount', $value);
    }

    /**
     * Required. Stickers placed on the card
     *
     * @return Base\ArrayObject<TonWalletCardSticker>
     * @throws Base\TelegramException
     */
    public function getStickers(): mixed
    {
        return $this->getFieldValue('stickers');
    }

    /**
     * @param list<TonWalletCardSticker|array<string, mixed>>|Base\ArrayObject<TonWalletCardSticker> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStickers(mixed $value): static
    {
        return $this->setFieldValue('stickers', $value);
    }

    /**
     * Optional. Address of the NFT of one of the stickers, whose colors must be used for the card background; omitted if the default background must be used
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBackgroundNftAddress(): mixed
    {
        return $this->getFieldValue('background_nft_address');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBackgroundNftAddress(mixed $value): static
    {
        return $this->setFieldValue('background_nft_address', $value);
    }
}
