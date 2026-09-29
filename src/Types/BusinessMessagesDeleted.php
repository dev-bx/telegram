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
 * This object is received when messages are deleted from a connected business account.
 *
 * @link https://core.telegram.org/bots/api#businessmessagesdeleted
 *
 * @property-read string|null $businessConnectionId Required. Unique identifier of the business connection
 * @property-write string $businessConnectionId
 * @property-read Chat|null $chat Required. Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
 * @property-write Chat|array<string, mixed> $chat
 * @property-read Base\ArrayObject<Base\ParameterInt> $messageIds Required. The list of identifiers of deleted messages in the chat of the business account
 * @property-write list<int>|Base\ArrayObject<Base\ParameterInt> $messageIds
 */
class BusinessMessagesDeleted extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'chat' => [
                'type' => [Chat::class],
                'required' => true,
            ],
            'message_ids' => [
                'type' => ['int'],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Unique identifier of the business connection
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
     * Required. Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
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
     * Required. The list of identifiers of deleted messages in the chat of the business account
     *
     * @return Base\ArrayObject<Base\ParameterInt>
     * @throws Base\TelegramException
     */
    public function getMessageIds(): mixed
    {
        return $this->getFieldValue('message_ids');
    }

    /**
     * @param list<int>|Base\ArrayObject<Base\ParameterInt> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageIds(mixed $value): static
    {
        return $this->setFieldValue('message_ids', $value);
    }
}
