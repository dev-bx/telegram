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

namespace DevBX\Telegram\InlineMode;

use DevBX\Telegram\Base;
use DevBX\Telegram\RichMessages;

/**
 * Represents the `InputMessageContent` of a rich message to be sent as the result of an inline query.
 *
 * @link https://core.telegram.org/bots/api#inputrichmessagecontent
 *
 * @property-read RichMessages\InputRichMessage|null $richMessage Required. The message to be sent. Only previously uploaded files may be used in the message.
 * @property-write RichMessages\InputRichMessage|array<string, mixed> $richMessage
 */
class InputRichMessageContent extends InputMessageContent
{
    /**
     * @return static
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [
            'rich_message' => [
                'type' => [RichMessages\InputRichMessage::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The message to be sent. Only previously uploaded files may be used in the message.
     *
     * @return RichMessages\InputRichMessage|null
     * @throws Base\TelegramException
     */
    public function getRichMessage(): mixed
    {
        return $this->getFieldValue('rich_message');
    }

    /**
     * @param RichMessages\InputRichMessage|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRichMessage(mixed $value): static
    {
        return $this->setFieldValue('rich_message', $value);
    }
}
