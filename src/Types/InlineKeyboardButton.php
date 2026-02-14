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
use DevBX\Telegram\Games;


/**
 * This object represents one button of an inline keyboard. Exactly one of the fields other than *text*, *icon\_custom\_emoji\_id*, and *style* must be used to specify the type of the button.
 * @property string $text
 * Label text on the button
 * @property string $iconCustomEmojiId
 * *Optional*. Unique identifier of the custom emoji shown before the text of the button. Can only be used by bots that purchased additional usernames on [Fragment](https://fragment.com) or in the messages directly sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram Premium subscription.
 * @property string $style
 * *Optional*. Style of the button. Must be one of “danger” (red), “success” (green) or “primary” (blue). If omitted, then an app-specific style is used.
 * @property string $url
 * *Optional*. HTTP or tg:// URL to be opened when the button is pressed. Links `tg://user?id=<user_id>` can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings.
 * @property string $callbackData
 * *Optional*. Data to be sent in a [callback query](#callbackquery) to the bot when the button is pressed, 1-64 bytes
 * @property WebAppInfo $webApp
 * *Optional*. Description of the [Web App](/bots/webapps) that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method [answerWebAppQuery](#answerwebappquery). Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a Telegram Business account.
 * @property LoginUrl $loginUrl
 * *Optional*. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the [Telegram Login Widget](/widgets/login).
 * @property string $switchInlineQuery
 * *Optional*. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent in channel direct messages chats and on behalf of a Telegram Business account.
 * @property string $switchInlineQueryCurrentChat
 * *Optional*. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.  
  
This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options. Not supported in channels and for messages sent in channel direct messages chats and on behalf of a Telegram Business account.
 * @property SwitchInlineQueryChosenChat $switchInlineQueryChosenChat
 * *Optional*. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent in channel direct messages chats and on behalf of a Telegram Business account.
 * @property CopyTextButton $copyText
 * *Optional*. Description of the button that copies the specified text to the clipboard.
 * @property Games\CallbackGame $callbackGame
 * *Optional*. Description of the game that will be launched when the user presses the button.  
  
**NOTE:** This type of button **must** always be the first button in the first row.
 * @property bool $pay
 * *Optional*. Specify *True*, to send a [Pay button](#payments). Substrings “![⭐](//telegram.org/img/emoji/40/E2AD90.png)” and “XTR” in the buttons's text will be replaced with a Telegram Star icon.  
  
**NOTE:** This type of button **must** always be the first button in the first row and can only be used in invoice messages.
 */
class InlineKeyboardButton extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'text' => [
				'type' => ['string'],
				'required' => true,
			],
			'icon_custom_emoji_id' => [
				'type' => ['string'],
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
				'type' => [WebAppInfo::class],
			],
			'login_url' => [
				'type' => [LoginUrl::class],
			],
			'switch_inline_query' => [
				'type' => ['string'],
			],
			'switch_inline_query_current_chat' => [
				'type' => ['string'],
			],
			'switch_inline_query_chosen_chat' => [
				'type' => [SwitchInlineQueryChosenChat::class],
			],
			'copy_text' => [
				'type' => [CopyTextButton::class],
			],
			'callback_game' => [
				'type' => [Games\CallbackGame::class],
			],
			'pay' => [
				'type' => ['bool'],
			],
		];
	}
	/**
	* @return string
	*/

	public function getText(): mixed
	{
		return $this->getFieldValue('text');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setText(mixed $value): static
	{
		return $this->setFieldValue('text', $value);
	}

	/**
	* @return string
	*/

	public function getIconCustomEmojiId(): mixed
	{
		return $this->getFieldValue('icon_custom_emoji_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setIconCustomEmojiId(mixed $value): static
	{
		return $this->setFieldValue('icon_custom_emoji_id', $value);
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
	* @return WebAppInfo
	*/

	public function getWebApp(): mixed
	{
		return $this->getFieldValue('web_app');
	}

	/**
	* @param WebAppInfo $value
	* @return static
	*/

	public function setWebApp(mixed $value): static
	{
		return $this->setFieldValue('web_app', $value);
	}

	/**
	* @return LoginUrl
	*/

	public function getLoginUrl(): mixed
	{
		return $this->getFieldValue('login_url');
	}

	/**
	* @param LoginUrl $value
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
	* @return SwitchInlineQueryChosenChat
	*/

	public function getSwitchInlineQueryChosenChat(): mixed
	{
		return $this->getFieldValue('switch_inline_query_chosen_chat');
	}

	/**
	* @param SwitchInlineQueryChosenChat $value
	* @return static
	*/

	public function setSwitchInlineQueryChosenChat(mixed $value): static
	{
		return $this->setFieldValue('switch_inline_query_chosen_chat', $value);
	}

	/**
	* @return CopyTextButton
	*/

	public function getCopyText(): mixed
	{
		return $this->getFieldValue('copy_text');
	}

	/**
	* @param CopyTextButton $value
	* @return static
	*/

	public function setCopyText(mixed $value): static
	{
		return $this->setFieldValue('copy_text', $value);
	}

	/**
	* @return Games\CallbackGame
	*/

	public function getCallbackGame(): mixed
	{
		return $this->getFieldValue('callback_game');
	}

	/**
	* @param Games\CallbackGame $value
	* @return static
	*/

	public function setCallbackGame(mixed $value): static
	{
		return $this->setFieldValue('callback_game', $value);
	}

	/**
	* @return bool
	*/

	public function getPay(): mixed
	{
		return $this->getFieldValue('pay');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setPay(mixed $value): static
	{
		return $this->setFieldValue('pay', $value);
	}

}