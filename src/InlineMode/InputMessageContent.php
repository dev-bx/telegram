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

namespace DevBX\Telegram\InlineMode;

use DevBX\Telegram\Base;

/**
 * This object represents the content of a message to be sent as a result of an inline query. Telegram clients currently support the following types:
 *
 * - `InputTextMessageContent`
 * - `InputRichMessageContent`
 * - `InputLocationMessageContent`
 * - `InputVenueMessageContent`
 * - `InputContactMessageContent`
 * - `InputInvoiceMessageContent`
 *
 * @link https://core.telegram.org/bots/api#inputmessagecontent
 *
 * Объединение: create() возвращает подходящий вариант — `InputTextMessageContent`, `InputRichMessageContent`, `InputLocationMessageContent`, `InputVenueMessageContent`, `InputContactMessageContent`, `InputInvoiceMessageContent`.
 */
class InputMessageContent extends Base\BaseType
{
    /**
     * @return list<class-string<InputTextMessageContent|InputRichMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent>>
     */
    public static function getRelations(): array
    {
        return [
            InputTextMessageContent::class,
            InputRichMessageContent::class,
            InputLocationMessageContent::class,
            InputVenueMessageContent::class,
            InputContactMessageContent::class,
            InputInvoiceMessageContent::class,
        ];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return InputTextMessageContent|InputRichMessageContent|InputLocationMessageContent|InputVenueMessageContent|InputContactMessageContent|InputInvoiceMessageContent|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createFromRelations(static::getRelations(), $value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [];
    }
}
