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
 * Cell in a table.
 * @property RichText|RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextButton|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink $text
 * *Optional*. Text in the cell. If omitted, then the cell is invisible.
 * @property bool $isHeader
 * *Optional*. *True*, if the cell is a header cell
 * @property int $colspan
 * *Optional*. The number of columns the cell spans if it is bigger than 1
 * @property int $rowspan
 * *Optional*. The number of rows the cell spans if it is bigger than 1
 * @property string $align
 * Horizontal cell content alignment. Currently, must be one of “left”, “center”, or “right”.
 * @property string $valign
 * Vertical cell content alignment. Currently, must be one of “top”, “middle”, or “bottom”.
 */
class RichBlockTableCell extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'text' => [
				'type' => [RichText::class],
			],
			'is_header' => [
				'type' => ['bool'],
			],
			'colspan' => [
				'type' => ['int'],
			],
			'rowspan' => [
				'type' => ['int'],
			],
			'align' => [
				'type' => ['string'],
				'required' => true,
			],
			'valign' => [
				'type' => ['string'],
				'required' => true,
			],
		];
	}
	/**
	* @return RichText|RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextButton|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink
	*/

	public function getText(): mixed
	{
		return $this->getFieldValue('text');
	}

	/**
	* @param RichText|RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextButton|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink $value
	* @return static
	*/

	public function setText(mixed $value): static
	{
		return $this->setFieldValue('text', $value);
	}

	/**
	* @return bool
	*/

	public function getIsHeader(): mixed
	{
		return $this->getFieldValue('is_header');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsHeader(mixed $value): static
	{
		return $this->setFieldValue('is_header', $value);
	}

	/**
	* @return int
	*/

	public function getColspan(): mixed
	{
		return $this->getFieldValue('colspan');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setColspan(mixed $value): static
	{
		return $this->setFieldValue('colspan', $value);
	}

	/**
	* @return int
	*/

	public function getRowspan(): mixed
	{
		return $this->getFieldValue('rowspan');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setRowspan(mixed $value): static
	{
		return $this->setFieldValue('rowspan', $value);
	}

	/**
	* @return string
	*/

	public function getAlign(): mixed
	{
		return $this->getFieldValue('align');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setAlign(mixed $value): static
	{
		return $this->setFieldValue('align', $value);
	}

	/**
	* @return string
	*/

	public function getValign(): mixed
	{
		return $this->getFieldValue('valign');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setValign(mixed $value): static
	{
		return $this->setFieldValue('valign', $value);
	}

}