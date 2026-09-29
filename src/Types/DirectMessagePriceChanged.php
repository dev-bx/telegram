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
 * Describes a service message about a change in the price of direct messages sent to a channel chat.
 *
 * @link https://core.telegram.org/bots/api#directmessagepricechanged
 *
 * @property-read bool|null $areDirectMessagesEnabled Required. *True*, if direct messages are enabled for the channel chat; *False* otherwise
 * @property-write bool $areDirectMessagesEnabled
 * @property-read int|null $directMessageStarCount Optional. The new number of Telegram Stars that must be paid by users for each direct message sent to the channel. Does not apply to users who have been exempted by administrators. Defaults to 0.
 * @property-write int $directMessageStarCount
 */
class DirectMessagePriceChanged extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'are_direct_messages_enabled' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'direct_message_star_count' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
     * Required. *True*, if direct messages are enabled for the channel chat; *False* otherwise
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getAreDirectMessagesEnabled(): mixed
    {
        return $this->getFieldValue('are_direct_messages_enabled');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAreDirectMessagesEnabled(mixed $value): static
    {
        return $this->setFieldValue('are_direct_messages_enabled', $value);
    }

    /**
     * Optional. The new number of Telegram Stars that must be paid by users for each direct message sent to the channel. Does not apply to users who have been exempted by administrators. Defaults to 0.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDirectMessageStarCount(): mixed
    {
        return $this->getFieldValue('direct_message_star_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDirectMessageStarCount(mixed $value): static
    {
        return $this->setFieldValue('direct_message_star_count', $value);
    }
}
