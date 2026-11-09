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
 * This object describes a sticker on a TON wallet card.
 *
 * @link https://core.telegram.org/bots/api#tonwalletcardsticker
 *
 * @property-read AreaPosition|null $position Required. Position of the sticker on the card
 * @property-write AreaPosition|array<string, mixed> $position
 * @property-read TonNft|null $nft Required. The NFT shown as the sticker
 * @property-write TonNft|array<string, mixed> $nft
 */
class TonWalletCardSticker extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'position' => [
                'type' => [AreaPosition::class],
                'required' => true,
            ],
            'nft' => [
                'type' => [TonNft::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Position of the sticker on the card
     *
     * @return AreaPosition|null
     * @throws Base\TelegramException
     */
    public function getPosition(): mixed
    {
        return $this->getFieldValue('position');
    }

    /**
     * @param AreaPosition|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPosition(mixed $value): static
    {
        return $this->setFieldValue('position', $value);
    }

    /**
     * Required. The NFT shown as the sticker
     *
     * @return TonNft|null
     * @throws Base\TelegramException
     */
    public function getNft(): mixed
    {
        return $this->getFieldValue('nft');
    }

    /**
     * @param TonNft|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setNft(mixed $value): static
    {
        return $this->setFieldValue('nft', $value);
    }
}
