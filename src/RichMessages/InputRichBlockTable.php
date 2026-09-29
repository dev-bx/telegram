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
 * A table, corresponding to the HTML tag `<table>`.
 * @property string $type
 * Type of the block, always “table”
 * @property Base\ArrayOfArrayObject|RichBlockTableCell[][] $cells
 * Cells of the table
 * @property bool $isBordered
 * *Optional*. Pass *True* if the table has borders
 * @property bool $isStriped
 * *Optional*. Pass *True* if the table is striped
 * @property bool $isCompact
 * *Optional*. Pass *True* if table cells must have smaller indents
 * @property RichText|RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextButton|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink $caption
 * *Optional*. Caption of the table
 */
class InputRichBlockTable extends InputRichBlock
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'table',
				'required' => true,
			],
			'cells' => [
				'type' => [RichBlockTableCell::class],
				'isArray' => 'matrix',
				'required' => true,
			],
			'is_bordered' => [
				'type' => ['bool'],
			],
			'is_striped' => [
				'type' => ['bool'],
			],
			'is_compact' => [
				'type' => ['bool'],
			],
			'caption' => [
				'type' => [RichText::class],
			],
		];
	}
	/**
	* @return string
	*/

	public function getType(): mixed
	{
		return $this->getFieldValue('type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setType(mixed $value): static
	{
		return $this->setFieldValue('type', $value);
	}

	/**
	* @return Base\ArrayOfArrayObject|RichBlockTableCell[][]
	*/

	public function getCells(): mixed
	{
		return $this->getFieldValue('cells');
	}

	/**
	* @param Base\ArrayOfArrayObject|RichBlockTableCell[][] $value
	* @return static
	*/

	public function setCells(mixed $value): static
	{
		return $this->setFieldValue('cells', $value);
	}

	/**
	* @return bool
	*/

	public function getIsBordered(): mixed
	{
		return $this->getFieldValue('is_bordered');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsBordered(mixed $value): static
	{
		return $this->setFieldValue('is_bordered', $value);
	}

	/**
	* @return bool
	*/

	public function getIsStriped(): mixed
	{
		return $this->getFieldValue('is_striped');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsStriped(mixed $value): static
	{
		return $this->setFieldValue('is_striped', $value);
	}

	/**
	* @return bool
	*/

	public function getIsCompact(): mixed
	{
		return $this->getFieldValue('is_compact');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsCompact(mixed $value): static
	{
		return $this->setFieldValue('is_compact', $value);
	}

	/**
	* @return RichText|RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextButton|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink
	*/

	public function getCaption(): mixed
	{
		return $this->getFieldValue('caption');
	}

	/**
	* @param RichText|RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextButton|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink $value
	* @return static
	*/

	public function setCaption(mixed $value): static
	{
		return $this->setFieldValue('caption', $value);
	}

}