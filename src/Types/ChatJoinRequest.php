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
 * Represents a join request sent to a chat.
 *
 * @link https://core.telegram.org/bots/api#chatjoinrequest
 *
 * @property-read Chat|null $chat Required. Chat to which the request was sent
 * @property-write Chat|array<string, mixed> $chat
 * @property-read User|null $from Required. User that sent the join request
 * @property-write User|array<string, mixed> $from
 * @property-read int|null $userChatId Required. Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user.
 * @property-write int $userChatId
 * @property-read int|null $date Required. Date the request was sent in Unix time
 * @property-write int $date
 * @property-read string|null $bio Optional. Bio of the user
 * @property-write string $bio
 * @property-read ChatInviteLink|null $inviteLink Optional. Chat invite link that was used by the user to send the join request
 * @property-write ChatInviteLink|array<string, mixed> $inviteLink
 * @property-read string|null $queryId Optional. Identifier of the join request query; for bots assigned to process join requests only. If present, then the bot must call `sendChatJoinRequestWebApp` or directly call `answerChatJoinRequestQuery` within 10 seconds.
 * @property-write string $queryId
 */
class ChatJoinRequest extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'chat' => [
                'type' => [Chat::class],
                'required' => true,
            ],
            'from' => [
                'type' => [User::class],
                'required' => true,
            ],
            'user_chat_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'bio' => [
                'type' => ['string'],
            ],
            'invite_link' => [
                'type' => [ChatInviteLink::class],
            ],
            'query_id' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. Chat to which the request was sent
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getChat(): mixed
    {
        return $this->getFieldValue('chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChat(mixed $value): static
    {
        return $this->setFieldValue('chat', $value);
    }

    /**
     * Required. User that sent the join request
     *
     * @return User|null
     * @throws Base\TelegramException
     */
    public function getFrom(): mixed
    {
        return $this->getFieldValue('from');
    }

    /**
     * @param User|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFrom(mixed $value): static
    {
        return $this->setFieldValue('from', $value);
    }

    /**
     * Required. Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUserChatId(): mixed
    {
        return $this->getFieldValue('user_chat_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserChatId(mixed $value): static
    {
        return $this->setFieldValue('user_chat_id', $value);
    }

    /**
     * Required. Date the request was sent in Unix time
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDate(): mixed
    {
        return $this->getFieldValue('date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDate(mixed $value): static
    {
        return $this->setFieldValue('date', $value);
    }

    /**
     * Optional. Bio of the user
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBio(): mixed
    {
        return $this->getFieldValue('bio');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBio(mixed $value): static
    {
        return $this->setFieldValue('bio', $value);
    }

    /**
     * Optional. Chat invite link that was used by the user to send the join request
     *
     * @return ChatInviteLink|null
     * @throws Base\TelegramException
     */
    public function getInviteLink(): mixed
    {
        return $this->getFieldValue('invite_link');
    }

    /**
     * @param ChatInviteLink|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInviteLink(mixed $value): static
    {
        return $this->setFieldValue('invite_link', $value);
    }

    /**
     * Optional. Identifier of the join request query; for bots assigned to process join requests only. If present, then the bot must call `sendChatJoinRequestWebApp` or directly call `answerChatJoinRequestQuery` within 10 seconds.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getQueryId(): mixed
    {
        return $this->getFieldValue('query_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setQueryId(mixed $value): static
    {
        return $this->setFieldValue('query_id', $value);
    }
}
