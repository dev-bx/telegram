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
 * This object defines the criteria used to request suitable users. Information about the selected users will be shared with the bot when the corresponding button is pressed. [More about requesting users »](https://core.telegram.org/bots/features#chat-and-user-selection)
 *
 * @link https://core.telegram.org/bots/api#keyboardbuttonrequestusers
 *
 * @property-read int|null $requestId Required. Signed 32-bit identifier of the request that will be received back in the `UsersShared` object. Must be unique within the message.
 * @property-write int $requestId
 * @property-read bool|null $userIsBot Optional. Pass *True* to request bots, pass *False* to request regular users. If not specified, no additional restrictions are applied.
 * @property-write bool $userIsBot
 * @property-read bool|null $userIsPremium Optional. Pass *True* to request premium users, pass *False* to request non-premium users. If not specified, no additional restrictions are applied.
 * @property-write bool $userIsPremium
 * @property-read int|null $maxQuantity Optional. The maximum number of users to be selected; 1-10. Defaults to 1.
 * @property-write int $maxQuantity
 * @property-read bool|null $requestName Optional. Pass *True* to request the users' first and last names
 * @property-write bool $requestName
 * @property-read bool|null $requestUsername Optional. Pass *True* to request the users' usernames
 * @property-write bool $requestUsername
 * @property-read bool|null $requestPhoto Optional. Pass *True* to request the users' photos
 * @property-write bool $requestPhoto
 */
class KeyboardButtonRequestUsers extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'request_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'user_is_bot' => [
                'type' => ['bool'],
            ],
            'user_is_premium' => [
                'type' => ['bool'],
            ],
            'max_quantity' => [
                'type' => ['int'],
            ],
            'request_name' => [
                'type' => ['bool'],
            ],
            'request_username' => [
                'type' => ['bool'],
            ],
            'request_photo' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Signed 32-bit identifier of the request that will be received back in the `UsersShared` object. Must be unique within the message.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getRequestId(): mixed
    {
        return $this->getFieldValue('request_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestId(mixed $value): static
    {
        return $this->setFieldValue('request_id', $value);
    }

    /**
     * Optional. Pass *True* to request bots, pass *False* to request regular users. If not specified, no additional restrictions are applied.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getUserIsBot(): mixed
    {
        return $this->getFieldValue('user_is_bot');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserIsBot(mixed $value): static
    {
        return $this->setFieldValue('user_is_bot', $value);
    }

    /**
     * Optional. Pass *True* to request premium users, pass *False* to request non-premium users. If not specified, no additional restrictions are applied.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getUserIsPremium(): mixed
    {
        return $this->getFieldValue('user_is_premium');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserIsPremium(mixed $value): static
    {
        return $this->setFieldValue('user_is_premium', $value);
    }

    /**
     * Optional. The maximum number of users to be selected; 1-10. Defaults to 1.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMaxQuantity(): mixed
    {
        return $this->getFieldValue('max_quantity');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMaxQuantity(mixed $value): static
    {
        return $this->setFieldValue('max_quantity', $value);
    }

    /**
     * Optional. Pass *True* to request the users' first and last names
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getRequestName(): mixed
    {
        return $this->getFieldValue('request_name');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestName(mixed $value): static
    {
        return $this->setFieldValue('request_name', $value);
    }

    /**
     * Optional. Pass *True* to request the users' usernames
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getRequestUsername(): mixed
    {
        return $this->getFieldValue('request_username');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestUsername(mixed $value): static
    {
        return $this->setFieldValue('request_username', $value);
    }

    /**
     * Optional. Pass *True* to request the users' photos
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getRequestPhoto(): mixed
    {
        return $this->getFieldValue('request_photo');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestPhoto(mixed $value): static
    {
        return $this->setFieldValue('request_photo', $value);
    }
}
