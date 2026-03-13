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
 * Use this method to stream a partial message to a user while the message is being generated. Returns *True* on success.
 * @property int $chatId
 * Unique identifier for the target private chat
 * @property int $messageThreadId
 * Unique identifier for the target message thread
 * @property int $draftId
 * Unique identifier of the message draft; must be non-zero. Changes of drafts with the same identifier are animated
 * @property string $text
 * Text of the message to be sent, 1-4096 characters after entities parsing
 * @property string $parseMode
 * Mode for parsing entities in the message text. See [formatting options](#formatting-options) for more details.
 * @property Base\ArrayObject|Types\MessageEntity[] $entities
 * A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse\_mode*
 * @method Base\BaseType send(Api $gateway = null)
 */
class SendMessageDraft extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'message_thread_id' => [
                'type' => ['int'],
            ],
            'draft_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'text' => [
                'type' => ['string'],
                'required' => true,
            ],
            'parse_mode' => [
                'type' => ['string'],
            ],
            'entities' => [
                'type' => [Types\MessageEntity::class],
                'isArray' => true,
            ],
        ];
    }

    /**
    * @return int
    */

    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
    * @return int
    */

    public function getMessageThreadId(): mixed
    {
        return $this->getFieldValue('message_thread_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setMessageThreadId(mixed $value): static
    {
        return $this->setFieldValue('message_thread_id', $value);
    }

    /**
    * @return int
    */

    public function getDraftId(): mixed
    {
        return $this->getFieldValue('draft_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setDraftId(mixed $value): static
    {
        return $this->setFieldValue('draft_id', $value);
    }

    /**
    * @return string
    */

    public function getText(): mixed
    {
        return $this->getFieldValue('text');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setText(mixed $value): static
    {
        return $this->setFieldValue('text', $value);
    }

    /**
    * @return string
    */

    public function getParseMode(): mixed
    {
        return $this->getFieldValue('parse_mode');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setParseMode(mixed $value): static
    {
        return $this->setFieldValue('parse_mode', $value);
    }

    /**
    * @return Base\ArrayObject|Types\MessageEntity[]
    */

    public function getEntities(): mixed
    {
        return $this->getFieldValue('entities');
    }

    /**
    * @param Base\ArrayObject|Types\MessageEntity[] $value
    * @return static
    */

    public function setEntities(mixed $value): static
    {
        return $this->setFieldValue('entities', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SendMessageDraft';
    }
}