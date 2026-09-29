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
 * This object represents a rich formatted text. Currently, it can be either a String for plain text, an Array of [RichText](#richtext), or any of the following types:
 */
class RichText extends Base\BaseType
{
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
	public static function getFields(): array
	{
		return [

		];
	}
}