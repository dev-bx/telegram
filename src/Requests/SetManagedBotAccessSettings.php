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

/**
 * Use this method to change the access settings of a managed bot. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setmanagedbotaccesssettings
 *
 * @property-read int|null $userId Required. User identifier of the managed bot whose access settings will be changed
 * @property-write int $userId
 * @property-read bool|null $isAccessRestricted Required. Pass *True* if only selected users can access the bot. The bot's owner can always access it.
 * @property-write bool $isAccessRestricted
 * @property-read Base\ArrayObject<Base\ParameterInt> $addedUserIds Optional. A JSON-serialized list of up to 10 identifiers of users who will have access to the bot in addition to its owner. Ignored if *is_access_restricted* is *False*.
 * @property-write list<int>|Base\ArrayObject<Base\ParameterInt> $addedUserIds
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SetManagedBotAccessSettings extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'is_access_restricted' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'added_user_ids' => [
                'type' => ['int'],
                'isArray' => true,
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. User identifier of the managed bot whose access settings will be changed
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
     * Required. Pass *True* if only selected users can access the bot. The bot's owner can always access it.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsAccessRestricted(): mixed
    {
        return $this->getFieldValue('is_access_restricted');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsAccessRestricted(mixed $value): static
    {
        return $this->setFieldValue('is_access_restricted', $value);
    }

    /**
     * Optional. A JSON-serialized list of up to 10 identifiers of users who will have access to the bot in addition to its owner. Ignored if *is_access_restricted* is *False*.
     *
     * @return Base\ArrayObject<Base\ParameterInt>
     * @throws Base\TelegramException
     */
    public function getAddedUserIds(): mixed
    {
        return $this->getFieldValue('added_user_ids');
    }

    /**
     * @param list<int>|Base\ArrayObject<Base\ParameterInt> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAddedUserIds(mixed $value): static
    {
        return $this->setFieldValue('added_user_ids', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setManagedBotAccessSettings';
    }
}
