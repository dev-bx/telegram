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
 * Describes a service message about a successful payment for a suggested post.
 *
 * @link https://core.telegram.org/bots/api#suggestedpostpaid
 *
 * @property-read Message|null $suggestedPostMessage Optional. Message containing the suggested post. Note that the `Message` object in this field will not contain the *reply_to_message* field even if it itself is a reply.
 * @property-write Message|array<string, mixed> $suggestedPostMessage
 * @property-read string|null $currency Required. Currency in which the payment was made. Currently, one of “XTR” for Telegram Stars or “TON” for TON grams.
 * @property-write string $currency
 * @property-read int|null $amount Optional. The amount of the currency that was received by the channel in nanograms; for payments in TON grams only
 * @property-write int $amount
 * @property-read StarAmount|null $starAmount Optional. The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only
 * @property-write StarAmount|array<string, mixed> $starAmount
 */
class SuggestedPostPaid extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'suggested_post_message' => [
                'type' => [Message::class],
            ],
            'currency' => [
                'type' => ['string'],
                'required' => true,
            ],
            'amount' => [
                'type' => ['int'],
            ],
            'star_amount' => [
                'type' => [StarAmount::class],
            ],
        ];
    }

    /**
     * Optional. Message containing the suggested post. Note that the `Message` object in this field will not contain the *reply_to_message* field even if it itself is a reply.
     *
     * @return Message|null
     * @throws Base\TelegramException
     */
    public function getSuggestedPostMessage(): mixed
    {
        return $this->getFieldValue('suggested_post_message');
    }

    /**
     * @param Message|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSuggestedPostMessage(mixed $value): static
    {
        return $this->setFieldValue('suggested_post_message', $value);
    }

    /**
     * Required. Currency in which the payment was made. Currently, one of “XTR” for Telegram Stars or “TON” for TON grams.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCurrency(): mixed
    {
        return $this->getFieldValue('currency');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCurrency(mixed $value): static
    {
        return $this->setFieldValue('currency', $value);
    }

    /**
     * Optional. The amount of the currency that was received by the channel in nanograms; for payments in TON grams only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getAmount(): mixed
    {
        return $this->getFieldValue('amount');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAmount(mixed $value): static
    {
        return $this->setFieldValue('amount', $value);
    }

    /**
     * Optional. The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only
     *
     * @return StarAmount|null
     * @throws Base\TelegramException
     */
    public function getStarAmount(): mixed
    {
        return $this->getFieldValue('star_amount');
    }

    /**
     * @param StarAmount|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStarAmount(mixed $value): static
    {
        return $this->setFieldValue('star_amount', $value);
    }
}
