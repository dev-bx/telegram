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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\Types;

/**
 * Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are free to modify the list before adding the bot. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setmydefaultadministratorrights
 *
 * @property-read Types\ChatAdministratorRights|null $rights Optional. A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
 * @property-write Types\ChatAdministratorRights|array<string, mixed> $rights
 * @property-read bool|null $forChannels Optional. Pass *True* to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
 * @property-write bool $forChannels
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Optional. A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
     *
     * @return Types\ChatAdministratorRights|null
     * @throws Base\TelegramException
     */
    public function getRights(): mixed
    {
        return $this->getFieldValue('rights');
    }

    /**
     * @param Types\ChatAdministratorRights|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRights(mixed $value): static
    {
        return $this->setFieldValue('rights', $value);
    }

    /**
     * Optional. Pass *True* to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getForChannels(): mixed
    {
        return $this->getFieldValue('for_channels');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setForChannels(mixed $value): static
    {
        return $this->setFieldValue('for_channels', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setMyDefaultAdministratorRights';
    }
}
