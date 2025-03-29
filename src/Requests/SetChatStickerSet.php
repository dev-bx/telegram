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
 * Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field *can\_set\_sticker\_set* optionally returned in [getChat](#getchat) requests to check if the bot can use this method. Returns *True* on success.
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
 * @property string $stickerSetName
 * Name of the sticker set to be set as the group sticker set
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetChatStickerSet extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'sticker_set_name' => [
                'type' => ['string'],
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
    * @return string
    */

    public function getStickerSetName(): mixed
    {
        return $this->getFieldValue('sticker_set_name');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setStickerSetName(mixed $value): static
    {
        return $this->setFieldValue('sticker_set_name', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetChatStickerSet';
    }
}