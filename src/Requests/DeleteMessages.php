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

/**
 * Use this method to delete multiple messages simultaneously. If some of the specified messages can't be found, they are skipped. Returns *True* on success.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int[] $messageIds
 * A JSON-serialized list of 1-100 identifiers of messages to delete. See [deleteMessage](#deletemessage) for limitations on which messages can be deleted
 * @method Base\BaseType send(Api $gateway = null)
 */
class DeleteMessages extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
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
    * @return int|string
    */

    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
    * @param int|string $value
    * @return static
    */

    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
    * @return int[]
    */

    public function getMessageIds(): mixed
    {
        return $this->getFieldValue('message_ids');
    }

    /**
    * @param int[] $value
    * @return static
    */

    public function setMessageIds(mixed $value): static
    {
        return $this->setFieldValue('message_ids', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'DeleteMessages';
    }
}