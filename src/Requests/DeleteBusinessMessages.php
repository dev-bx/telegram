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
 * Delete messages on behalf of a business account. Requires the *can_delete_sent_messages* business bot right to delete messages sent by the bot itself, or the *can_delete_all_messages* business bot right to delete any message. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#deletebusinessmessages
 *
 * @property-read string|null $businessConnectionId Required. Unique identifier of the business connection on behalf of which to delete the messages
 * @property-write string $businessConnectionId
 * @property-read Base\ArrayObject<Base\ParameterInt> $messageIds Required. A JSON-serialized list of 1-100 identifiers of messages to delete. All messages must be from the same chat. See `deleteMessage` for limitations on which messages can be deleted.
 * @property-write list<int>|Base\ArrayObject<Base\ParameterInt> $messageIds
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class DeleteBusinessMessages extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'message_ids' => [
                'type' => ['int'],
                'isArray' => true,
                'required' => true,
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the business connection on behalf of which to delete the messages
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
     * Required. A JSON-serialized list of 1-100 identifiers of messages to delete. All messages must be from the same chat. See `deleteMessage` for limitations on which messages can be deleted.
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

    protected function getRequestMethod(): string
    {
        return 'deleteBusinessMessages';
    }
}
