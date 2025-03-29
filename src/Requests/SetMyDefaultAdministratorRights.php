<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2025 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\Types;

/**
 * Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are free to modify the list before adding the bot. Returns *True* on success.
 * @property Types\ChatAdministratorRights $rights
 * A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
 * @property bool $forChannels
 * Pass *True* to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetMyDefaultAdministratorRights extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'rights' => [
                'type' => [Types\ChatAdministratorRights::class],
            ],
            'for_channels' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
    * @return Types\ChatAdministratorRights
    */

    public function getRights(): mixed
    {
        return $this->getFieldValue('rights');
    }

    /**
    * @param Types\ChatAdministratorRights $value
    * @return static
    */

    public function setRights(mixed $value): static
    {
        return $this->setFieldValue('rights', $value);
    }

    /**
    * @return bool
    */

    public function getForChannels(): mixed
    {
        return $this->getFieldValue('for_channels');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setForChannels(mixed $value): static
    {
        return $this->setFieldValue('for_channels', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetMyDefaultAdministratorRights';
    }
}