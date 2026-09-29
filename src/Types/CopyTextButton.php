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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;

/**
 * This object represents an inline keyboard button that copies specified text to the clipboard.
 *
 * @link https://core.telegram.org/bots/api#copytextbutton
 *
 * @property-read string|null $text Required. The text to be copied to the clipboard; 1-256 characters
 * @property-write string $text
 */
class CopyTextButton extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'text' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. The text to be copied to the clipboard; 1-256 characters
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getText(): mixed
    {
        return $this->getFieldValue('text');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setText(mixed $value): static
    {
        return $this->setFieldValue('text', $value);
    }
}
