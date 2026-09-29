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
 * This object represents a rich formatted text. Currently, it can be either a String for plain text, an Array of `RichText`, or any of the following types:
 *
 * - `RichTextBold`
 * - `RichTextItalic`
 * - `RichTextUnderline`
 * - `RichTextStrikethrough`
 * - `RichTextSpoiler`
 * - `RichTextDateTime`
 * - `RichTextTextMention`
 * - `RichTextSubscript`
 * - `RichTextSuperscript`
 * - `RichTextMarked`
 * - `RichTextCode`
 * - `RichTextCustomEmoji`
 * - `RichTextMathematicalExpression`
 * - `RichTextUrl`
 * - `RichTextEmailAddress`
 * - `RichTextPhoneNumber`
 * - `RichTextBankCardNumber`
 * - `RichTextMention`
 * - `RichTextHashtag`
 * - `RichTextCashtag`
 * - `RichTextBotCommand`
 * - `RichTextButton`
 * - `RichTextAnchor`
 * - `RichTextAnchorLink`
 * - `RichTextReference`
 * - `RichTextReferenceLink`
 *
 * @link https://core.telegram.org/bots/api#richtext
 *
 * Объединение: create() возвращает подходящий вариант — `RichTextBold`, `RichTextItalic`, `RichTextUnderline`, `RichTextStrikethrough`, `RichTextSpoiler`, `RichTextDateTime`, `RichTextTextMention`, `RichTextSubscript`, `RichTextSuperscript`, `RichTextMarked`, `RichTextCode`, `RichTextCustomEmoji`, `RichTextMathematicalExpression`, `RichTextUrl`, `RichTextEmailAddress`, `RichTextPhoneNumber`, `RichTextBankCardNumber`, `RichTextMention`, `RichTextHashtag`, `RichTextCashtag`, `RichTextBotCommand`, `RichTextButton`, `RichTextAnchor`, `RichTextAnchorLink`, `RichTextReference`, `RichTextReferenceLink`.
 */
class RichText extends Base\BaseType
{
    /**
     * @return list<class-string<RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextButton|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink>>
     */
    public static function getRelations(): array
    {
        return [
            RichTextBold::class,
            RichTextItalic::class,
            RichTextUnderline::class,
            RichTextStrikethrough::class,
            RichTextSpoiler::class,
            RichTextDateTime::class,
            RichTextTextMention::class,
            RichTextSubscript::class,
            RichTextSuperscript::class,
            RichTextMarked::class,
            RichTextCode::class,
            RichTextCustomEmoji::class,
            RichTextMathematicalExpression::class,
            RichTextUrl::class,
            RichTextEmailAddress::class,
            RichTextPhoneNumber::class,
            RichTextBankCardNumber::class,
            RichTextMention::class,
            RichTextHashtag::class,
            RichTextCashtag::class,
            RichTextBotCommand::class,
            RichTextButton::class,
            RichTextAnchor::class,
            RichTextAnchorLink::class,
            RichTextReference::class,
            RichTextReferenceLink::class,
        ];
    }

    public static function getRawForms(): array
    {
        return [Base\BaseType::RAW_FORM_STRING, Base\BaseType::RAW_FORM_LIST];
    }

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return RichText|RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextButton|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createFromRawForm($value, $ignoreUnknownFields) ?? static::createFromRelations(static::getRelations(), $value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [];
    }
}
