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
 * This object represents an attribute of an NFT in the TON blockchain.
 *
 * @link https://core.telegram.org/bots/api#tonnftattribute
 *
 * @property-read string|null $traitType Required. Trait type of the attribute
 * @property-write string $traitType
 * @property-read string|null $value Required. Value of the attribute
 * @property-write string $value
 */
class TonNftAttribute extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'trait_type' => [
                'type' => ['string'],
                'required' => true,
            ],
            'value' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Trait type of the attribute
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTraitType(): mixed
    {
        return $this->getFieldValue('trait_type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTraitType(mixed $value): static
    {
        return $this->setFieldValue('trait_type', $value);
    }

    /**
     * Required. Value of the attribute
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getValue(): mixed
    {
        return $this->getFieldValue('value');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setValue(mixed $value): static
    {
        return $this->setFieldValue('value', $value);
    }
}
