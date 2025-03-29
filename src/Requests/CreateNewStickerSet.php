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
use DevBX\Telegram\Stickers;

/**
 * Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created. Returns *True* on success.
 * @property int $userId
 * User identifier of created sticker set owner
 * @property string $name
 * Short name of sticker set, to be used in `t.me/addstickers/` URLs (e.g., *animals*). Can contain only English letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in `"_by_<bot_username>"`. `<bot_username>` is case insensitive. 1-64 characters.
 * @property string $title
 * Sticker set title, 1-64 characters
 * @property Base\ArrayObject|Stickers\InputSticker[] $stickers
 * A JSON-serialized list of 1-50 initial stickers to be added to the sticker set
 * @property string $stickerType
 * Type of stickers in the set, pass “regular”, “mask”, or “custom\_emoji”. By default, a regular sticker set is created.
 * @property bool $needsRepainting
 * Pass *True* if stickers in the sticker set must be repainted to the color of text when used in messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based on context; for custom emoji sticker sets only
 * @method Base\BaseType send(Api $gateway = null)
 */
class CreateNewStickerSet extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'name' => [
                'type' => ['string'],
                'required' => true,
            ],
            'title' => [
                'type' => ['string'],
                'required' => true,
            ],
            'stickers' => [
                'type' => [Stickers\InputSticker::class],
                'isArray' => true,
                'required' => true,
            ],
            'sticker_type' => [
                'type' => ['string'],
            ],
            'needs_repainting' => [
                'type' => ['bool'],
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

    public function getName(): mixed
    {
        return $this->getFieldValue('name');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setName(mixed $value): static
    {
        return $this->setFieldValue('name', $value);
    }

    /**
    * @return string
    */

    public function getTitle(): mixed
    {
        return $this->getFieldValue('title');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setTitle(mixed $value): static
    {
        return $this->setFieldValue('title', $value);
    }

    /**
    * @return Base\ArrayObject|Stickers\InputSticker[]
    */

    public function getStickers(): mixed
    {
        return $this->getFieldValue('stickers');
    }

    /**
    * @param Base\ArrayObject|Stickers\InputSticker[] $value
    * @return static
    */

    public function setStickers(mixed $value): static
    {
        return $this->setFieldValue('stickers', $value);
    }

    /**
    * @return string
    */

    public function getStickerType(): mixed
    {
        return $this->getFieldValue('sticker_type');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setStickerType(mixed $value): static
    {
        return $this->setFieldValue('sticker_type', $value);
    }

    /**
    * @return bool
    */

    public function getNeedsRepainting(): mixed
    {
        return $this->getFieldValue('needs_repainting');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setNeedsRepainting(mixed $value): static
    {
        return $this->setFieldValue('needs_repainting', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'CreateNewStickerSet';
    }
}