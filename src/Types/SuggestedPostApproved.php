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
 * Describes a service message about the approval of a suggested post.
 *
 * @link https://core.telegram.org/bots/api#suggestedpostapproved
 *
 * @property-read Message|null $suggestedPostMessage Optional. Message containing the suggested post. Note that the `Message` object in this field will not contain the *reply_to_message* field even if it itself is a reply.
 * @property-write Message|array<string, mixed> $suggestedPostMessage
 * @property-read SuggestedPostPrice|null $price Optional. Amount paid for the post
 * @property-write SuggestedPostPrice|array<string, mixed> $price
 * @property-read int|null $sendDate Required. Date when the post will be published
 * @property-write int $sendDate
 */
class SuggestedPostApproved extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'suggested_post_message' => [
                'type' => [Message::class],
            ],
            'price' => [
                'type' => [SuggestedPostPrice::class],
            ],
            'send_date' => [
                'type' => ['int'],
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
     * Optional. Amount paid for the post
     *
     * @return SuggestedPostPrice|null
     * @throws Base\TelegramException
     */
    public function getPrice(): mixed
    {
        return $this->getFieldValue('price');
    }

    /**
     * @param SuggestedPostPrice|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPrice(mixed $value): static
    {
        return $this->setFieldValue('price', $value);
    }

    /**
     * Required. Date when the post will be published
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getSendDate(): mixed
    {
        return $this->getFieldValue('send_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSendDate(mixed $value): static
    {
        return $this->setFieldValue('send_date', $value);
    }
}
