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
 * Use this method to set the thumbnail of a custom emoji sticker set. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setcustomemojistickersetthumbnail
 *
 * @property-read string|null $name Required. Sticker set name
 * @property-write string $name
 * @property-read string|null $customEmojiId Optional. Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the thumbnail and use the first sticker as the thumbnail
 * @property-write string $customEmojiId
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SetCustomEmojiStickerSetThumbnail extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'custom_emoji_id' => [
                'type' => ['string'],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Sticker set name
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getName(): mixed
    {
        return $this->getFieldValue('name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setName(mixed $value): static
    {
        return $this->setFieldValue('name', $value);
    }

    /**
     * Optional. Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the thumbnail and use the first sticker as the thumbnail
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCustomEmojiId(): mixed
    {
        return $this->getFieldValue('custom_emoji_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCustomEmojiId(mixed $value): static
    {
        return $this->setFieldValue('custom_emoji_id', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setCustomEmojiStickerSetThumbnail';
    }
}
