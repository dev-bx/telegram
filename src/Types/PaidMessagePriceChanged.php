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
 * Describes a service message about a change in the price of paid messages within a chat.
 *
 * @link https://core.telegram.org/bots/api#paidmessagepricechanged
 *
 * @property-read int|null $paidMessageStarCount Required. The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
 * @property-write int $paidMessageStarCount
 */
class PaidMessagePriceChanged extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'paid_message_star_count' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getPaidMessageStarCount(): mixed
    {
        return $this->getFieldValue('paid_message_star_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPaidMessageStarCount(mixed $value): static
    {
        return $this->setFieldValue('paid_message_star_count', $value);
    }
}
