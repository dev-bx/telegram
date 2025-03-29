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
 * Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property Types\InputFile $photo
 * New chat photo, uploaded using multipart/form-data
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetChatPhoto extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'photo' => [
                'type' => [Types\InputFile::class],
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
    * @return Types\InputFile
    */

    public function getPhoto(): mixed
    {
        return $this->getFieldValue('photo');
    }

    /**
    * @param Types\InputFile $value
    * @return static
    */

    public function setPhoto(mixed $value): static
    {
        return $this->setFieldValue('photo', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetChatPhoto';
    }
}