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
 * Rich formatted message.
 *
 * @link https://core.telegram.org/bots/api#richmessage
 *
 * @property-read Base\ArrayObject<RichBlock> $blocks Required. Content of the message
 * @property-write list<RichBlock|array<string, mixed>>|Base\ArrayObject<RichBlock> $blocks
 * @property-read bool|null $isRtl Optional. *True*, if the rich message must be shown right-to-left
 * @property-write bool $isRtl
 */
class RichMessage extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'blocks' => [
                'type' => [RichBlock::class],
                'isArray' => true,
                'required' => true,
            ],
            'is_rtl' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Content of the message
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
     * Optional. *True*, if the rich message must be shown right-to-left
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsRtl(): mixed
    {
        return $this->getFieldValue('is_rtl');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsRtl(mixed $value): static
    {
        return $this->setFieldValue('is_rtl', $value);
    }
}
