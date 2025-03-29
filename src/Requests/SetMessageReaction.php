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
use DevBX\Telegram\Types;

/**
 * Use this method to change the chosen reactions on a message. Service messages of some types can't be reacted to. Automatically forwarded messages from a channel to its discussion group have the same available reactions as messages in the channel. Bots can't use paid reactions. Returns *True* on success.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $messageId
 * Identifier of the target message. If the message belongs to a media group, the reaction is set to the first non-deleted message in the group instead.
 * @property Base\ArrayObject|Types\ReactionType[] $reaction
 * A JSON-serialized list of reaction types to set on the message. Currently, as non-premium users, bots can set up to one reaction per message. A custom emoji reaction can be used if it is either already present on the message or explicitly allowed by chat administrators. Paid reactions can't be used by bots.
 * @property bool $isBig
 * Pass *True* to set the reaction with a big animation
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetMessageReaction extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'message_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'reaction' => [
                'type' => [Types\ReactionType::class],
                'isArray' => true,
            ],
            'is_big' => [
                'type' => ['bool'],
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
    * @return int
    */

    public function getMessageId(): mixed
    {
        return $this->getFieldValue('message_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setMessageId(mixed $value): static
    {
        return $this->setFieldValue('message_id', $value);
    }

    /**
    * @return Base\ArrayObject|Types\ReactionType[]
    */

    public function getReaction(): mixed
    {
        return $this->getFieldValue('reaction');
    }

    /**
    * @param Base\ArrayObject|Types\ReactionType[] $value
    * @return static
    */

    public function setReaction(mixed $value): static
    {
        return $this->setFieldValue('reaction', $value);
    }

    /**
    * @return bool
    */

    public function getIsBig(): mixed
    {
        return $this->getFieldValue('is_big');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setIsBig(mixed $value): static
    {
        return $this->setFieldValue('is_big', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetMessageReaction';
    }
}