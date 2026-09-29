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
 * Describes a service message about the rejection of a suggested post.
 *
 * @link https://core.telegram.org/bots/api#suggestedpostdeclined
 *
 * @property-read Message|null $suggestedPostMessage Optional. Message containing the suggested post. Note that the `Message` object in this field will not contain the *reply_to_message* field even if it itself is a reply.
 * @property-write Message|array<string, mixed> $suggestedPostMessage
 * @property-read string|null $comment Optional. Comment with which the post was declined
 * @property-write string $comment
 */
class SuggestedPostDeclined extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'suggested_post_message' => [
                'type' => [Message::class],
            ],
            'comment' => [
                'type' => ['string'],
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
     * Optional. Comment with which the post was declined
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getComment(): mixed
    {
        return $this->getFieldValue('comment');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setComment(mixed $value): static
    {
        return $this->setFieldValue('comment', $value);
    }
}
