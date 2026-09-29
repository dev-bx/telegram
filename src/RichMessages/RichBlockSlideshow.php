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

/**
 * A slideshow, corresponding to the custom HTML tag `<tg-slideshow>`.
 *
 * @link https://core.telegram.org/bots/api#richblockslideshow
 *
 * @property-read string|null $type Required. Type of the block, always “slideshow”
 * @property-write string $type
 * @property-read Base\ArrayObject<RichBlock> $blocks Required. Elements of the slideshow
 * @property-write list<RichBlock|array<string, mixed>>|Base\ArrayObject<RichBlock> $blocks
 * @property-read RichBlockCaption|null $caption Optional. Caption of the block
 * @property-write RichBlockCaption|array<string, mixed> $caption
 */
class RichBlockSlideshow extends RichBlock
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
                'value' => 'slideshow',
                'required' => true,
            ],
            'blocks' => [
                'type' => [RichBlock::class],
                'isArray' => true,
                'required' => true,
            ],
            'caption' => [
                'type' => [RichBlockCaption::class],
            ],
        ];
    }

    /**
     * Required. Type of the block, always “slideshow”
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
     * Required. Elements of the slideshow
     *
     * @return Base\ArrayObject<RichBlock>
     * @throws Base\TelegramException
     */
    public function getBlocks(): mixed
    {
        return $this->getFieldValue('blocks');
    }

    /**
     * @param list<RichBlock|array<string, mixed>>|Base\ArrayObject<RichBlock> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBlocks(mixed $value): static
    {
        return $this->setFieldValue('blocks', $value);
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
