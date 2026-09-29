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
 * This object defines the criteria used to request a suitable chat. Information about the selected chat will be shared with the bot when the corresponding button is pressed. The bot will be granted requested rights in the chat if appropriate. [More about requesting chats »](https://core.telegram.org/bots/features#chat-and-user-selection).
 *
 * @link https://core.telegram.org/bots/api#keyboardbuttonrequestchat
 *
 * @property-read int|null $requestId Required. Signed 32-bit identifier of the request, which will be received back in the `ChatShared` object. Must be unique within the message.
 * @property-write int $requestId
 * @property-read bool|null $chatIsChannel Required. Pass *True* to request a channel chat, pass *False* to request a group or a supergroup chat
 * @property-write bool $chatIsChannel
 * @property-read bool|null $chatIsForum Optional. Pass *True* to request a forum supergroup, pass *False* to request a non-forum chat. If not specified, no additional restrictions are applied.
 * @property-write bool $chatIsForum
 * @property-read bool|null $chatHasUsername Optional. Pass *True* to request a supergroup or a channel with a username, pass *False* to request a chat without a username. If not specified, no additional restrictions are applied.
 * @property-write bool $chatHasUsername
 * @property-read bool|null $chatIsCreated Optional. Pass *True* to request a chat owned by the user. Otherwise, no additional restrictions are applied.
 * @property-write bool $chatIsCreated
 * @property-read ChatAdministratorRights|null $userAdministratorRights Optional. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of *bot_administrator_rights*. If not specified, no additional restrictions are applied.
 * @property-write ChatAdministratorRights|array<string, mixed> $userAdministratorRights
 * @property-read ChatAdministratorRights|null $botAdministratorRights Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of *user_administrator_rights*. If not specified, no additional restrictions are applied.
 * @property-write ChatAdministratorRights|array<string, mixed> $botAdministratorRights
 * @property-read bool|null $botIsMember Optional. Pass *True* to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
 * @property-write bool $botIsMember
 * @property-read bool|null $requestTitle Optional. Pass *True* to request the chat's title
 * @property-write bool $requestTitle
 * @property-read bool|null $requestUsername Optional. Pass *True* to request the chat's username
 * @property-write bool $requestUsername
 * @property-read bool|null $requestPhoto Optional. Pass *True* to request the chat's photo
 * @property-write bool $requestPhoto
 */
class KeyboardButtonRequestChat extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'request_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'chat_is_channel' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'chat_is_forum' => [
                'type' => ['bool'],
            ],
            'chat_has_username' => [
                'type' => ['bool'],
            ],
            'chat_is_created' => [
                'type' => ['bool'],
            ],
            'user_administrator_rights' => [
                'type' => [ChatAdministratorRights::class],
            ],
            'bot_administrator_rights' => [
                'type' => [ChatAdministratorRights::class],
            ],
            'bot_is_member' => [
                'type' => ['bool'],
            ],
            'request_title' => [
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
     * Required. Signed 32-bit identifier of the request, which will be received back in the `ChatShared` object. Must be unique within the message.
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
     * Required. Pass *True* to request a channel chat, pass *False* to request a group or a supergroup chat
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getChatIsChannel(): mixed
    {
        return $this->getFieldValue('chat_is_channel');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatIsChannel(mixed $value): static
    {
        return $this->setFieldValue('chat_is_channel', $value);
    }

    /**
     * Optional. Pass *True* to request a forum supergroup, pass *False* to request a non-forum chat. If not specified, no additional restrictions are applied.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getChatIsForum(): mixed
    {
        return $this->getFieldValue('chat_is_forum');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatIsForum(mixed $value): static
    {
        return $this->setFieldValue('chat_is_forum', $value);
    }

    /**
     * Optional. Pass *True* to request a supergroup or a channel with a username, pass *False* to request a chat without a username. If not specified, no additional restrictions are applied.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getChatHasUsername(): mixed
    {
        return $this->getFieldValue('chat_has_username');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatHasUsername(mixed $value): static
    {
        return $this->setFieldValue('chat_has_username', $value);
    }

    /**
     * Optional. Pass *True* to request a chat owned by the user. Otherwise, no additional restrictions are applied.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getChatIsCreated(): mixed
    {
        return $this->getFieldValue('chat_is_created');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatIsCreated(mixed $value): static
    {
        return $this->setFieldValue('chat_is_created', $value);
    }

    /**
     * Optional. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of *bot_administrator_rights*. If not specified, no additional restrictions are applied.
     *
     * @return ChatAdministratorRights|null
     * @throws Base\TelegramException
     */
    public function getUserAdministratorRights(): mixed
    {
        return $this->getFieldValue('user_administrator_rights');
    }

    /**
     * @param ChatAdministratorRights|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserAdministratorRights(mixed $value): static
    {
        return $this->setFieldValue('user_administrator_rights', $value);
    }

    /**
     * Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of *user_administrator_rights*. If not specified, no additional restrictions are applied.
     *
     * @return ChatAdministratorRights|null
     * @throws Base\TelegramException
     */
    public function getBotAdministratorRights(): mixed
    {
        return $this->getFieldValue('bot_administrator_rights');
    }

    /**
     * @param ChatAdministratorRights|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBotAdministratorRights(mixed $value): static
    {
        return $this->setFieldValue('bot_administrator_rights', $value);
    }

    /**
     * Optional. Pass *True* to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getBotIsMember(): mixed
    {
        return $this->getFieldValue('bot_is_member');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBotIsMember(mixed $value): static
    {
        return $this->setFieldValue('bot_is_member', $value);
    }

    /**
     * Optional. Pass *True* to request the chat's title
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getRequestTitle(): mixed
    {
        return $this->getFieldValue('request_title');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestTitle(mixed $value): static
    {
        return $this->setFieldValue('request_title', $value);
    }

    /**
     * Optional. Pass *True* to request the chat's username
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
     * Optional. Pass *True* to request the chat's photo
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
