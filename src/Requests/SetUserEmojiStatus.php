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

/**
 * Changes the emoji status for a given user that previously allowed the bot to manage their emoji status via the Mini App method [requestEmojiStatusAccess](https://core.telegram.org/bots/webapps#initializing-mini-apps). Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setuseremojistatus
 *
 * @property-read int|null $userId Required. Unique identifier of the target user
 * @property-write int $userId
 * @property-read string|null $emojiStatusCustomEmojiId Optional. Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status.
 * @property-write string $emojiStatusCustomEmojiId
 * @property-read int|null $emojiStatusExpirationDate Optional. Expiration date of the emoji status, if any
 * @property-write int $emojiStatusExpirationDate
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the target user
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
     * Optional. Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getEmojiStatusCustomEmojiId(): mixed
    {
        return $this->getFieldValue('emoji_status_custom_emoji_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEmojiStatusCustomEmojiId(mixed $value): static
    {
        return $this->setFieldValue('emoji_status_custom_emoji_id', $value);
    }

    /**
     * Optional. Expiration date of the emoji status, if any
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getEmojiStatusExpirationDate(): mixed
    {
        return $this->getFieldValue('emoji_status_expiration_date');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setEmojiStatusExpirationDate(mixed $value): static
    {
        return $this->setFieldValue('emoji_status_expiration_date', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setUserEmojiStatus';
    }
}
