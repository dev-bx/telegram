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
 * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass *True* for all permissions to lift restrictions from a user. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#restrictchatmember
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
 * @property-write int|string $chatId
 * @property-read int|null $userId Required. Unique identifier of the target user
 * @property-write int $userId
 * @property-read Types\ChatPermissions|null $permissions Required. A JSON-serialized object for new user permissions
 * @property-write Types\ChatPermissions|array<string, mixed> $permissions
 * @property-read bool|null $useIndependentChatPermissions Optional. Pass *True* if chat permissions are set independently. Otherwise, the *can_send_other_messages* and *can_add_web_page_previews* permissions will imply the *can_send_messages*, *can_send_audios*, *can_send_documents*, *can_send_photos*, *can_send_videos*, *can_send_video_notes*, and *can_send_voice_notes* permissions; the *can_send_polls* permission will imply the *can_send_messages* permission.
 * @property-write bool $useIndependentChatPermissions
 * @property-read int|null $untilDate Optional. Date when restrictions will be lifted for the user; Unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever.
 * @property-write int $untilDate
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class RestrictChatMember extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'permissions' => [
                'type' => [Types\ChatPermissions::class],
                'required' => true,
            ],
            'use_independent_chat_permissions' => [
                'type' => ['bool'],
            ],
            'until_date' => [
                'type' => ['int'],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the target chat or username of the target supergroup in the format `@username`
     *
     * @return int|string|null
     * @throws Base\TelegramException
     */
    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
     * @param int|string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
     * Required. Unique identifier of the target user
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
     * Required. A JSON-serialized object for new user permissions
     *
     * @return Types\ChatPermissions|null
     * @throws Base\TelegramException
     */
    public function getPermissions(): mixed
    {
        return $this->getFieldValue('permissions');
    }

    /**
     * @param Types\ChatPermissions|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPermissions(mixed $value): static
    {
        return $this->setFieldValue('permissions', $value);
    }

    /**
     * Optional. Pass *True* if chat permissions are set independently. Otherwise, the *can_send_other_messages* and *can_add_web_page_previews* permissions will imply the *can_send_messages*, *can_send_audios*, *can_send_documents*, *can_send_photos*, *can_send_videos*, *can_send_video_notes*, and *can_send_voice_notes* permissions; the *can_send_polls* permission will imply the *can_send_messages* permission.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getUseIndependentChatPermissions(): mixed
    {
        return $this->getFieldValue('use_independent_chat_permissions');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUseIndependentChatPermissions(mixed $value): static
    {
        return $this->setFieldValue('use_independent_chat_permissions', $value);
    }

    /**
     * Optional. Date when restrictions will be lifted for the user; Unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUntilDate(): mixed
    {
        return $this->getFieldValue('until_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUntilDate(mixed $value): static
    {
        return $this->setFieldValue('until_date', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'restrictChatMember';
    }
}
