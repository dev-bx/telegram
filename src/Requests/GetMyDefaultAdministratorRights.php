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
 * Use this method to get the current default administrator rights of the bot. Returns [ChatAdministratorRights](#chatadministratorrights) on success.
 * @property bool $forChannels
 * Pass *True* to get default administrator rights of the bot in channels. Otherwise, default administrator rights of the bot for groups and supergroups will be returned.
 * @method Types\ChatAdministratorRights send(Api $gateway = null)
 */
class GetMyDefaultAdministratorRights extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'for_channels' => [
                'type' => ['bool'],
            ],
            '@return' => [
                'type' => Types\ChatAdministratorRights::class,
            ],
        ];
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
        return 'GetMyDefaultAdministratorRights';
    }
}