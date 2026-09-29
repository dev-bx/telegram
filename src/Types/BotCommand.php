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
 * This object represents a bot command.
 *
 * @link https://core.telegram.org/bots/api#botcommand
 *
 * @property-read string|null $command Required. Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
 * @property-write string $command
 * @property-read string|null $description Required. Description of the command; 1-256 characters
 * @property-write string $description
 * @property-read bool|null $isEphemeral Optional. *True*, if the command sends an ephemeral message, which can be seen only by the sender of the message and the bot
 * @property-write bool $isEphemeral
 */
class BotCommand extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'command' => [
                'type' => ['string'],
                'required' => true,
            ],
            'description' => [
                'type' => ['string'],
                'required' => true,
            ],
            'is_ephemeral' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCommand(): mixed
    {
        return $this->getFieldValue('command');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCommand(mixed $value): static
    {
        return $this->setFieldValue('command', $value);
    }

    /**
     * Required. Description of the command; 1-256 characters
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getDescription(): mixed
    {
        return $this->getFieldValue('description');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDescription(mixed $value): static
    {
        return $this->setFieldValue('description', $value);
    }

    /**
     * Optional. *True*, if the command sends an ephemeral message, which can be seen only by the sender of the message and the bot
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsEphemeral(): mixed
    {
        return $this->getFieldValue('is_ephemeral');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsEphemeral(mixed $value): static
    {
        return $this->setFieldValue('is_ephemeral', $value);
    }
}
