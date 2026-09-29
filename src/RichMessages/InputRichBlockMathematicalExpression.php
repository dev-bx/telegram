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
 * A block with a mathematical expression in LaTeX format, corresponding to the custom HTML tag `<tg-math-block>`.
 *
 * @link https://core.telegram.org/bots/api#inputrichblockmathematicalexpression
 *
 * @property-read string|null $type Required. Type of the block, always “mathematical_expression”
 * @property-write string $type
 * @property-read string|null $expression Required. The mathematical expression in LaTeX format
 * @property-write string $expression
 */
class InputRichBlockMathematicalExpression extends InputRichBlock
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
                'value' => 'mathematical_expression',
                'required' => true,
            ],
            'expression' => [
                'type' => ['string'],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the block, always “mathematical_expression”
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
     * Required. The mathematical expression in LaTeX format
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getExpression(): mixed
    {
        return $this->getFieldValue('expression');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setExpression(mixed $value): static
    {
        return $this->setFieldValue('expression', $value);
    }
}
