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

namespace DevBX\Telegram\Payments;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;

/**
 * This object contains information about a paid media purchase.
 *
 * @link https://core.telegram.org/bots/api#paidmediapurchased
 *
 * @property-read Types\User|null $from Required. User who purchased the media
 * @property-write Types\User|array<string, mixed> $from
 * @property-read string|null $paidMediaPayload Required. Bot-specified paid media payload
 * @property-write string $paidMediaPayload
 */
class PaidMediaPurchased extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'from' => [
                'type' => [Types\User::class],
                'required' => true,
            ],
            'paid_media_payload' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. User who purchased the media
     *
     * @return Types\User|null
     * @throws Base\TelegramException
     */
    public function getFrom(): mixed
    {
        return $this->getFieldValue('from');
    }

    /**
     * @param Types\User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFrom(mixed $value): static
    {
        return $this->setFieldValue('from', $value);
    }

    /**
     * Required. Bot-specified paid media payload
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPaidMediaPayload(): mixed
    {
        return $this->getFieldValue('paid_media_payload');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPaidMediaPayload(mixed $value): static
    {
        return $this->setFieldValue('paid_media_payload', $value);
    }
}
