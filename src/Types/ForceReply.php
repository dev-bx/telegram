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
 * Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if the user has selected the bot's message and tapped 'Reply'). This can be extremely useful if you want to create user-friendly step-by-step interfaces without having to sacrifice [privacy mode](https://core.telegram.org/bots/features#privacy-mode). Not supported in channels and for messages sent on behalf of a user account.
 *
 * **Example:** A [poll bot](https://t.me/PollBot) for groups runs in privacy mode (only receives commands, replies to its messages and mentions). There could be two ways to create a new poll:
 *
 * The last option is definitely more attractive. And if you use `ForceReply` in your bot's questions, it will receive the user's answers even if it only receives replies, commands and mentions - without any extra work for the user.
 *
 * @link https://core.telegram.org/bots/api#forcereply
 *
 * @property-read bool|null $forceReply Required. Shows reply interface to the user, as if they had manually selected the bot's message and tapped 'Reply'
 * @property-write bool $forceReply
 * @property-read string|null $inputFieldPlaceholder Optional. The placeholder to be shown in the input field when the reply is active; 1-64 characters
 * @property-write string $inputFieldPlaceholder
 * @property-read bool|null $selective Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the *text* of the `Message` object; 2) if the bot's message is a reply to a message in the same chat and forum topic, sender of the original message.
 * @property-write bool $selective
 */
class ForceReply extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'force_reply' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'input_field_placeholder' => [
                'type' => ['string'],
            ],
            'selective' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Shows reply interface to the user, as if they had manually selected the bot's message and tapped 'Reply'
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getForceReply(): mixed
    {
        return $this->getFieldValue('force_reply');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setForceReply(mixed $value): static
    {
        return $this->setFieldValue('force_reply', $value);
    }

    /**
     * Optional. The placeholder to be shown in the input field when the reply is active; 1-64 characters
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getInputFieldPlaceholder(): mixed
    {
        return $this->getFieldValue('input_field_placeholder');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInputFieldPlaceholder(mixed $value): static
    {
        return $this->setFieldValue('input_field_placeholder', $value);
    }

    /**
     * Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the *text* of the `Message` object; 2) if the bot's message is a reply to a message in the same chat and forum topic, sender of the original message.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getSelective(): mixed
    {
        return $this->getFieldValue('selective');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSelective(mixed $value): static
    {
        return $this->setFieldValue('selective', $value);
    }
}
