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
use DevBX\Telegram\Types;


/**
 * This object represents a button in a [RichMessage](#richmessage). Exactly one of the fields other than *text* and *style* must be used to specify the type of the button.
 * @property RichText|RichTextBold|RichTextItalic|RichTextUnderline|RichTextStrikethrough|RichTextSpoiler|RichTextDateTime|RichTextTextMention|RichTextSubscript|RichTextSuperscript|RichTextMarked|RichTextCode|RichTextCustomEmoji|RichTextMathematicalExpression|RichTextUrl|RichTextEmailAddress|RichTextPhoneNumber|RichTextBankCardNumber|RichTextMention|RichTextHashtag|RichTextCashtag|RichTextBotCommand|RichTextButton|RichTextAnchor|RichTextAnchorLink|RichTextReference|RichTextReferenceLink $text
 * Text of the button. May contain only plain text, [RichTextCustomEmoji](#richtextcustomemoji) and [RichTextDateTime](#richtextdatetime) entities.
 * @property string $style
 * *Optional*. Style of the button. Must be one of “danger”, “success”, “primary”, or “link” (the button is shown as a regular link without borders). Apps may use theme-specific colors for the button background and text based on the style. The style “link” is allowed only for callback buttons.
 * @property string $url
 * *Optional*. HTTP or tg:// URL to be opened when the button is pressed. Links `tg://user?id=<user_id>` can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings.
 * @property string $callbackData
 * *Optional*. Data to be sent in a [callback query](#callbackquery) to the bot when the button is pressed, 1-64 bytes
 * @property Types\WebAppInfo $webApp
 * *Optional*. Description of the [Web App](/bots/webapps) that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method [answerWebAppQuery](#answerwebappquery). Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a business account.
 * @property Types\LoginUrl $loginUrl
 * *Optional*. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the [Telegram Login Widget](/widgets/login). Not supported for ephemeral messages.
 * @property string $switchInlineQuery
 * *Optional*. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
 * @property string $switchInlineQueryCurrentChat
 * *Optional*. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted. Not supported in channels and for messages sent in channel direct messages chats and on behalf of a business account.
 * @property Types\SwitchInlineQueryChosenChat $switchInlineQueryChosenChat
 * *Optional*. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
 * @property Types\CopyTextButton $copyText
 * *Optional*. A button that copies the specified text to the clipboard
 * @property Types\DisabledButton $disabled
 * *Optional*. If set, then the button is disabled and does nothing
 */
class RichMessageButton extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'text' => [
				'type' => [RichText::class],
				'required' => true,
			],
			'style' => [
				'type' => ['string'],
			],
			'url' => [
				'type' => ['string'],
			],
			'callback_data' => [
				'type' => ['string'],
			],
			'web_app' => [
				'type' => [Types\WebAppInfo::class],
			],
			'login_url' => [
				'type' => [Types\LoginUrl::class],
			],
			'switch_inline_query' => [
				'type' => ['string'],
			],
			'switch_inline_query_current_chat' => [
				'type' => ['string'],
			],
			'switch_inline_query_chosen_chat' => [
				'type' => [Types\SwitchInlineQueryChosenChat::class],
			],
			'copy_text' => [
				'type' => [Types\CopyTextButton::class],
			],
			'disabled' => [
				'type' => [Types\DisabledButton::class],
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
	* @return string
	*/

	public function getStyle(): mixed
	{
		return $this->getFieldValue('style');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setStyle(mixed $value): static
	{
		return $this->setFieldValue('style', $value);
	}

	/**
	* @return string
	*/

	public function getUrl(): mixed
	{
		return $this->getFieldValue('url');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setUrl(mixed $value): static
	{
		return $this->setFieldValue('url', $value);
	}

	/**
	* @return string
	*/

	public function getCallbackData(): mixed
	{
		return $this->getFieldValue('callback_data');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCallbackData(mixed $value): static
	{
		return $this->setFieldValue('callback_data', $value);
	}

	/**
	* @return Types\WebAppInfo
	*/

	public function getWebApp(): mixed
	{
		return $this->getFieldValue('web_app');
	}

	/**
	* @param Types\WebAppInfo $value
	* @return static
	*/

	public function setWebApp(mixed $value): static
	{
		return $this->setFieldValue('web_app', $value);
	}

	/**
	* @return Types\LoginUrl
	*/

	public function getLoginUrl(): mixed
	{
		return $this->getFieldValue('login_url');
	}

	/**
	* @param Types\LoginUrl $value
	* @return static
	*/

	public function setLoginUrl(mixed $value): static
	{
		return $this->setFieldValue('login_url', $value);
	}

	/**
	* @return string
	*/

	public function getSwitchInlineQuery(): mixed
	{
		return $this->getFieldValue('switch_inline_query');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setSwitchInlineQuery(mixed $value): static
	{
		return $this->setFieldValue('switch_inline_query', $value);
	}

	/**
	* @return string
	*/

	public function getSwitchInlineQueryCurrentChat(): mixed
	{
		return $this->getFieldValue('switch_inline_query_current_chat');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setSwitchInlineQueryCurrentChat(mixed $value): static
	{
		return $this->setFieldValue('switch_inline_query_current_chat', $value);
	}

	/**
	* @return Types\SwitchInlineQueryChosenChat
	*/

	public function getSwitchInlineQueryChosenChat(): mixed
	{
		return $this->getFieldValue('switch_inline_query_chosen_chat');
	}

	/**
	* @param Types\SwitchInlineQueryChosenChat $value
	* @return static
	*/

	public function setSwitchInlineQueryChosenChat(mixed $value): static
	{
		return $this->setFieldValue('switch_inline_query_chosen_chat', $value);
	}

	/**
	* @return Types\CopyTextButton
	*/

	public function getCopyText(): mixed
	{
		return $this->getFieldValue('copy_text');
	}

	/**
	* @param Types\CopyTextButton $value
	* @return static
	*/

	public function setCopyText(mixed $value): static
	{
		return $this->setFieldValue('copy_text', $value);
	}

	/**
	* @return Types\DisabledButton
	*/

	public function getDisabled(): mixed
	{
		return $this->getFieldValue('disabled');
	}

	/**
	* @param Types\DisabledButton $value
	* @return static
	*/

	public function setDisabled(mixed $value): static
	{
		return $this->setFieldValue('disabled', $value);
	}

}