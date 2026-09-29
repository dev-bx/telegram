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
 * Describes an inline message sent by a [Web App](https://core.telegram.org/bots/webapps) on behalf of a user.
 *
 * @link https://core.telegram.org/bots/api#sentwebappmessage
 *
 * @property-read string|null $inlineMessageId Optional. Identifier of the sent inline message. Available only if there is an `InlineKeyboardMarkup` attached to the message.
 * @property-write string $inlineMessageId
 */
class SentWebAppMessage extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'inline_message_id' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Optional. Identifier of the sent inline message. Available only if there is an `InlineKeyboardMarkup` attached to the message.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getInlineMessageId(): mixed
    {
        return $this->getFieldValue('inline_message_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInlineMessageId(mixed $value): static
    {
        return $this->setFieldValue('inline_message_id', $value);
    }
}
