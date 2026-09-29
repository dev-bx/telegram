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
 * This object describes an update about a user stopping message generation.
 *
 * @link https://core.telegram.org/bots/api#messagegenerationstopped
 *
 * @property-read Chat|null $chat Required. Chat in which the message is generated
 * @property-write Chat|array<string, mixed> $chat
 * @property-read int|null $messageThreadId Optional. Unique identifier of the message thread in which the message is generated
 * @property-write int $messageThreadId
 * @property-read int|null $draftId Required. Unique identifier of the message draft which was stopped
 * @property-write int $draftId
 */
class MessageGenerationStopped extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'chat' => [
                'type' => [Chat::class],
                'required' => true,
            ],
            'message_thread_id' => [
                'type' => ['int'],
            ],
            'draft_id' => [
                'type' => ['int'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Chat in which the message is generated
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
     * Optional. Unique identifier of the message thread in which the message is generated
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMessageThreadId(): mixed
    {
        return $this->getFieldValue('message_thread_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageThreadId(mixed $value): static
    {
        return $this->setFieldValue('message_thread_id', $value);
    }

    /**
     * Required. Unique identifier of the message draft which was stopped
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDraftId(): mixed
    {
        return $this->getFieldValue('draft_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDraftId(mixed $value): static
    {
        return $this->setFieldValue('draft_id', $value);
    }
}
