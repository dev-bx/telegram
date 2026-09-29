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
 * Describes a service message about a chat being joined by a user from a community.
 *
 * @link https://core.telegram.org/bots/api#communitychatjoined
 *
 * @property-read Community|null $community Required. The community from which the chat was joined
 * @property-write Community|array<string, mixed> $community
 */
class CommunityChatJoined extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'community' => [
                'type' => [Community::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The community from which the chat was joined
     *
     * @return Community|null
     * @throws Base\TelegramException
     */
    public function getCommunity(): mixed
    {
        return $this->getFieldValue('community');
    }

    /**
     * @param Community|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCommunity(mixed $value): static
    {
        return $this->setFieldValue('community', $value);
    }
}
