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
 * This object represents a boost removed from a chat.
 *
 * @link https://core.telegram.org/bots/api#chatboostremoved
 *
 * @property-read Chat|null $chat Required. Chat which was boosted
 * @property-write Chat|array<string, mixed> $chat
 * @property-read string|null $boostId Required. Unique identifier of the boost
 * @property-write string $boostId
 * @property-read int|null $removeDate Required. Point in time (Unix timestamp) when the boost was removed
 * @property-write int $removeDate
 * @property-read ChatBoostSource|null $source Required. Source of the removed boost
 * @property-write ChatBoostSource|array<string, mixed> $source
 */
class ChatBoostRemoved extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'chat' => [
                'type' => [Chat::class],
                'required' => true,
            ],
            'boost_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'remove_date' => [
                'type' => ['int'],
                'required' => true,
            ],
            'source' => [
                'type' => [ChatBoostSource::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Chat which was boosted
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
     * Required. Unique identifier of the boost
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBoostId(): mixed
    {
        return $this->getFieldValue('boost_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBoostId(mixed $value): static
    {
        return $this->setFieldValue('boost_id', $value);
    }

    /**
     * Required. Point in time (Unix timestamp) when the boost was removed
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getRemoveDate(): mixed
    {
        return $this->getFieldValue('remove_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRemoveDate(mixed $value): static
    {
        return $this->setFieldValue('remove_date', $value);
    }

    /**
     * Required. Source of the removed boost
     *
     * @return ChatBoostSource|null
     * @throws Base\TelegramException
     */
    public function getSource(): mixed
    {
        return $this->getFieldValue('source');
    }

    /**
     * @param ChatBoostSource|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSource(mixed $value): static
    {
        return $this->setFieldValue('source', $value);
    }
}
