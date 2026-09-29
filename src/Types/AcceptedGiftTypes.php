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
 * This object describes the types of gifts that can be gifted to a user or a chat.
 *
 * @link https://core.telegram.org/bots/api#acceptedgifttypes
 *
 * @property-read bool|null $unlimitedGifts Required. *True*, if unlimited regular gifts are accepted
 * @property-write bool $unlimitedGifts
 * @property-read bool|null $limitedGifts Required. *True*, if limited regular gifts are accepted
 * @property-write bool $limitedGifts
 * @property-read bool|null $uniqueGifts Required. *True*, if unique gifts or gifts that can be upgraded to unique for free are accepted
 * @property-write bool $uniqueGifts
 * @property-read bool|null $premiumSubscription Required. *True*, if a Telegram Premium subscription is accepted
 * @property-write bool $premiumSubscription
 * @property-read bool|null $giftsFromChannels Required. *True*, if transfers of unique gifts from channels are accepted
 * @property-write bool $giftsFromChannels
 */
class AcceptedGiftTypes extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'unlimited_gifts' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'limited_gifts' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'unique_gifts' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'premium_subscription' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'gifts_from_channels' => [
                'type' => ['bool'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. *True*, if unlimited regular gifts are accepted
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getUnlimitedGifts(): mixed
    {
        return $this->getFieldValue('unlimited_gifts');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUnlimitedGifts(mixed $value): static
    {
        return $this->setFieldValue('unlimited_gifts', $value);
    }

    /**
     * Required. *True*, if limited regular gifts are accepted
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getLimitedGifts(): mixed
    {
        return $this->getFieldValue('limited_gifts');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLimitedGifts(mixed $value): static
    {
        return $this->setFieldValue('limited_gifts', $value);
    }

    /**
     * Required. *True*, if unique gifts or gifts that can be upgraded to unique for free are accepted
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getUniqueGifts(): mixed
    {
        return $this->getFieldValue('unique_gifts');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUniqueGifts(mixed $value): static
    {
        return $this->setFieldValue('unique_gifts', $value);
    }

    /**
     * Required. *True*, if a Telegram Premium subscription is accepted
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getPremiumSubscription(): mixed
    {
        return $this->getFieldValue('premium_subscription');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPremiumSubscription(mixed $value): static
    {
        return $this->setFieldValue('premium_subscription', $value);
    }

    /**
     * Required. *True*, if transfers of unique gifts from channels are accepted
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getGiftsFromChannels(): mixed
    {
        return $this->getFieldValue('gifts_from_channels');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGiftsFromChannels(mixed $value): static
    {
        return $this->setFieldValue('gifts_from_channels', $value);
    }
}
