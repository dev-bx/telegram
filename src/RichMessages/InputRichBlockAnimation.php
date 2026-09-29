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

namespace DevBX\Telegram\RichMessages;

use DevBX\Telegram\Base;
use DevBX\Telegram\Types;

/**
 * A block with an animation, corresponding to the HTML tag `<video>`.
 *
 * @link https://core.telegram.org/bots/api#inputrichblockanimation
 *
 * @property-read string|null $type Required. Type of the block, always “animation”
 * @property-write string $type
 * @property-read Types\InputMediaAnimation|null $animation Required. The animation. Caption is ignored.
 * @property-write Types\InputMediaAnimation|array<string, mixed> $animation
 * @property-read RichBlockCaption|null $caption Optional. Caption of the block
 * @property-write RichBlockCaption|array<string, mixed> $caption
 */
class InputRichBlockAnimation extends InputRichBlock
{
    /**
     * @return static
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [
            'type' => [
                'type' => ['string'],
                'value' => 'animation',
                'required' => true,
            ],
            'animation' => [
                'type' => [Types\InputMediaAnimation::class],
                'required' => true,
            ],
            'caption' => [
                'type' => [RichBlockCaption::class],
            ],
        ];
    }

    /**
     * Required. Type of the block, always “animation”
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Required. The animation. Caption is ignored.
     *
     * @return Types\InputMediaAnimation|null
     * @throws Base\TelegramException
     */
    public function getAnimation(): mixed
    {
        return $this->getFieldValue('animation');
    }

    /**
     * @param Types\InputMediaAnimation|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAnimation(mixed $value): static
    {
        return $this->setFieldValue('animation', $value);
    }

    /**
     * Optional. Caption of the block
     *
     * @return RichBlockCaption|null
     * @throws Base\TelegramException
     */
    public function getCaption(): mixed
    {
        return $this->getFieldValue('caption');
    }

    /**
     * @param RichBlockCaption|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaption(mixed $value): static
    {
        return $this->setFieldValue('caption', $value);
    }
}
