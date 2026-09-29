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
 * An expandable block for details disclosure, corresponding to the HTML tag `<details>`.
 * @property string $type
 * Type of the block, always “details”
 * @property RichText|RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextButton|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink $summary
 * Always shown summary of the block
 * @property Base\ArrayObject|RichBlock[] $blocks
 * Content of the block
 * @property bool $isOpen
 * *Optional*. *True*, if the content of the block is visible by default
 */
class RichBlockDetails extends RichBlock
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'details',
				'required' => true,
			],
			'summary' => [
				'type' => [RichText::class],
				'required' => true,
			],
			'blocks' => [
				'type' => [RichBlock::class],
				'isArray' => true,
				'required' => true,
			],
			'is_open' => [
				'type' => ['bool'],
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
	* @return RichText|RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextButton|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink
	*/

	public function getSummary(): mixed
	{
		return $this->getFieldValue('summary');
	}

	/**
	* @param RichText|RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextButton|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink $value
	* @return static
	*/

	public function setSummary(mixed $value): static
	{
		return $this->setFieldValue('summary', $value);
	}

	/**
	* @return Base\ArrayObject|RichBlock[]
	*/

	public function getBlocks(): mixed
	{
		return $this->getFieldValue('blocks');
	}

	/**
	* @param Base\ArrayObject|RichBlock[] $value
	* @return static
	*/

	public function setBlocks(mixed $value): static
	{
		return $this->setFieldValue('blocks', $value);
	}

	/**
	* @return bool
	*/

	public function getIsOpen(): mixed
	{
		return $this->getFieldValue('is_open');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsOpen(mixed $value): static
	{
		return $this->setFieldValue('is_open', $value);
	}

}