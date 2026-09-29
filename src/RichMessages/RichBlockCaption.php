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
 * Caption of a rich formatted block.
 *
 * @link https://core.telegram.org/bots/api#richblockcaption
 *
 * @property-read RichText|string|list<mixed>|null $text Required. Block caption
 * @property-write RichText|string|list<mixed>|array<string, mixed> $text
 * @property-read RichText|string|list<mixed>|null $credit Optional. Block credit which corresponds to the HTML tag <cite>
 * @property-write RichText|string|list<mixed>|array<string, mixed> $credit
 */
class RichBlockCaption extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'text' => [
                'type' => [RichText::class],
                'required' => true,
            ],
            'credit' => [
                'type' => [RichText::class],
            ],
        ];
    }

    /**
     * Required. Block caption
     *
     * @return RichText|string|list<mixed>|null
     * @throws Base\TelegramException
     */
    public function getText(): mixed
    {
        return $this->getFieldValue('text');
    }

    /**
     * @param RichText|string|list<mixed>|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setText(mixed $value): static
    {
        return $this->setFieldValue('text', $value);
    }

    /**
     * Optional. Block credit which corresponds to the HTML tag <cite>
     *
     * @return RichText|string|list<mixed>|null
     * @throws Base\TelegramException
     */
    public function getCredit(): mixed
    {
        return $this->getFieldValue('credit');
    }

    /**
     * @param RichText|string|list<mixed>|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCredit(mixed $value): static
    {
        return $this->setFieldValue('credit', $value);
    }
}
