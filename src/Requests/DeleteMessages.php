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
 * Use this method to delete multiple messages simultaneously. If some of the specified messages can't be found, they are skipped. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#deletemessages
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
 * @property-write int|string $chatId
 * @property-read Base\ArrayObject<Base\ParameterInt> $messageIds Required. A JSON-serialized list of 1-100 identifiers of messages to delete. See `deleteMessage` for limitations on which messages can be deleted.
 * @property-write list<int>|Base\ArrayObject<Base\ParameterInt> $messageIds
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
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
     * Required. A JSON-serialized list of 1-100 identifiers of messages to delete. See `deleteMessage` for limitations on which messages can be deleted.
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
        return 'deleteMessages';
    }
}
