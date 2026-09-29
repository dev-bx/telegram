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
 * Use this method to change the chosen reactions on a message. Service messages of some types can't be reacted to. Automatically forwarded messages from a channel to its discussion group have the same available reactions as messages in the channel. Bots can't use paid reactions. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setmessagereaction
 *
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format `@username`
 * @property-write int|string $chatId
 * @property-read int|null $messageId Required. Identifier of the target message. If the message belongs to a media group, the reaction is set to the first non-deleted message in the group instead.
 * @property-write int $messageId
 * @property-read Base\ArrayObject<Types\ReactionType> $reaction Optional. A JSON-serialized list of reaction types to set on the message. Currently, as non-premium users, bots can set up to one reaction per message. A custom emoji reaction can be used if it is either already present on the message or explicitly allowed by chat administrators. Paid reactions can't be used by bots.
 * @property-write list<Types\ReactionType|array<string, mixed>>|Base\ArrayObject<Types\ReactionType> $reaction
 * @property-read bool|null $isBig Optional. Pass *True* to set the reaction with a big animation
 * @property-write bool $isBig
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
     * Required. Identifier of the target message. If the message belongs to a media group, the reaction is set to the first non-deleted message in the group instead.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMessageId(): mixed
    {
        return $this->getFieldValue('message_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageId(mixed $value): static
    {
        return $this->setFieldValue('message_id', $value);
    }

    /**
     * Optional. A JSON-serialized list of reaction types to set on the message. Currently, as non-premium users, bots can set up to one reaction per message. A custom emoji reaction can be used if it is either already present on the message or explicitly allowed by chat administrators. Paid reactions can't be used by bots.
     *
     * @return Base\ArrayObject<Types\ReactionType>
     * @throws Base\TelegramException
     */
    public function getReaction(): mixed
    {
        return $this->getFieldValue('reaction');
    }

    /**
     * @param list<Types\ReactionType|array<string, mixed>>|Base\ArrayObject<Types\ReactionType> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setReaction(mixed $value): static
    {
        return $this->setFieldValue('reaction', $value);
    }

    /**
     * Optional. Pass *True* to set the reaction with a big animation
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsBig(): mixed
    {
        return $this->getFieldValue('is_big');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsBig(mixed $value): static
    {
        return $this->setFieldValue('is_big', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setMessageReaction';
    }
}
