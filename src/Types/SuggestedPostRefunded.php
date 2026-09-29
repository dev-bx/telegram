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
 * Describes a service message about a payment refund for a suggested post.
 *
 * @link https://core.telegram.org/bots/api#suggestedpostrefunded
 *
 * @property-read Message|null $suggestedPostMessage Optional. Message containing the suggested post. Note that the `Message` object in this field will not contain the *reply_to_message* field even if it itself is a reply.
 * @property-write Message|array<string, mixed> $suggestedPostMessage
 * @property-read string|null $reason Required. Reason for the refund. Currently, one of “post_deleted” if the post was deleted within 24 hours of being posted or removed from scheduled messages without being posted, or “payment_refunded” if the payer refunded their payment.
 * @property-write string $reason
 */
class SuggestedPostRefunded extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'suggested_post_message' => [
                'type' => [Message::class],
            ],
            'reason' => [
                'type' => ['string'],
                'required' => true,
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
     * Required. Reason for the refund. Currently, one of “post_deleted” if the post was deleted within 24 hours of being posted or removed from scheduled messages without being posted, or “payment_refunded” if the payer refunded their payment.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getReason(): mixed
    {
        return $this->getFieldValue('reason');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReason(mixed $value): static
    {
        return $this->setFieldValue('reason', $value);
    }
}
