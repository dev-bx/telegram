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
 * Changes the emoji status for a given user that previously allowed the bot to manage their emoji status via the Mini App method [requestEmojiStatusAccess](/bots/webapps#initializing-mini-apps). Returns *True* on success.
 * @property int $userId
 * Unique identifier of the target user
 * @property string $emojiStatusCustomEmojiId
 * Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status.
 * @property int $emojiStatusExpirationDate
 * Expiration date of the emoji status, if any
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetUserEmojiStatus extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'emoji_status_custom_emoji_id' => [
                'type' => ['string'],
            ],
            'emoji_status_expiration_date' => [
                'type' => ['int'],
            ],
        ];
    }

    /**
    * @return int
    */

    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
    * @return string
    */

    public function getEmojiStatusCustomEmojiId(): mixed
    {
        return $this->getFieldValue('emoji_status_custom_emoji_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setEmojiStatusCustomEmojiId(mixed $value): static
    {
        return $this->setFieldValue('emoji_status_custom_emoji_id', $value);
    }

    /**
    * @return int
    */

    public function getEmojiStatusExpirationDate(): mixed
    {
        return $this->getFieldValue('emoji_status_expiration_date');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setEmojiStatusExpirationDate(mixed $value): static
    {
        return $this->setFieldValue('emoji_status_expiration_date', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetUserEmojiStatus';
    }
}