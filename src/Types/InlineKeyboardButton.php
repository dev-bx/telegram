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
 * This object represents one button of an inline keyboard. Exactly one of the fields other than *text*, *icon_custom_emoji_id*, and *style* must be used to specify the type of the button.
 *
 * @link https://core.telegram.org/bots/api#inlinekeyboardbutton
 *
 * @property-read string|null $text Required. Label text on the button
 * @property-write string $text
 * @property-read string|null $iconCustomEmojiId Optional. Unique identifier of the custom emoji shown before the text of the button. Can only be used by bots that purchased additional usernames on [Fragment](https://fragment.com) or in the messages directly sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram Premium subscription.
 * @property-write string $iconCustomEmojiId
 * @property-read string|null $style Optional. Style of the button. Must be one of “danger” (red), “success” (green) or “primary” (blue). If omitted, then an app-specific style is used.
 * @property-write string $style
 * @property-read string|null $url Optional. HTTP or tg:// URL to be opened when the button is pressed. Links `tg://user?id=<user_id>` can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings.
 * @property-write string $url
 * @property-read string|null $callbackData Optional. Data to be sent in a `CallbackQuery` to the bot when the button is pressed, 1-64 bytes
 * @property-write string $callbackData
 * @property-read WebAppInfo|null $webApp Optional. Description of the [Web App](https://core.telegram.org/bots/webapps) that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method `answerWebAppQuery`. Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a business account.
 * @property-write WebAppInfo|array<string, mixed> $webApp
 * @property-read LoginUrl|null $loginUrl Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the [Telegram Login Widget](https://core.telegram.org/widgets/login). Not supported for ephemeral messages.
 * @property-write LoginUrl|array<string, mixed> $loginUrl
 * @property-read string|null $switchInlineQuery Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
 * @property-write string $switchInlineQuery
 * @property-read string|null $switchInlineQueryCurrentChat Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted. This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options. Not supported in channels and for messages sent in channel direct messages chats and on behalf of a business account.
 * @property-write string $switchInlineQueryCurrentChat
 * @property-read SwitchInlineQueryChosenChat|null $switchInlineQueryChosenChat Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
 * @property-write SwitchInlineQueryChosenChat|array<string, mixed> $switchInlineQueryChosenChat
 * @property-read CopyTextButton|null $copyText Optional. Description of the button that copies the specified text to the clipboard
 * @property-write CopyTextButton|array<string, mixed> $copyText
 * @property-read Games\CallbackGame|null $callbackGame Optional. Description of the game that will be launched when the user presses the button. **NOTE:** This type of button **must** always be the first button in the first row.
 * @property-write Games\CallbackGame|array<string, mixed> $callbackGame
 * @property-read bool|null $pay Optional. Specify *True*, to send a [Pay button](https://core.telegram.org/bots/api#payments). Substrings “⭐” and “XTR” in the buttons's text will be replaced with a Telegram Star icon. **NOTE:** This type of button **must** always be the first button in the first row and can only be used in invoice messages.
 * @property-write bool $pay
 * @property-read DisabledButton|null $disabled Optional. If set, then the button is disabled and does nothing
 * @property-write DisabledButton|array<string, mixed> $disabled
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
            'disabled' => [
                'type' => [DisabledButton::class],
            ],
        ];
    }

    /**
     * Required. Label text on the button
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

    /**
     * Optional. Unique identifier of the custom emoji shown before the text of the button. Can only be used by bots that purchased additional usernames on [Fragment](https://fragment.com) or in the messages directly sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram Premium subscription.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getIconCustomEmojiId(): mixed
    {
        return $this->getFieldValue('icon_custom_emoji_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIconCustomEmojiId(mixed $value): static
    {
        return $this->setFieldValue('icon_custom_emoji_id', $value);
    }

    /**
     * Optional. Style of the button. Must be one of “danger” (red), “success” (green) or “primary” (blue). If omitted, then an app-specific style is used.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getStyle(): mixed
    {
        return $this->getFieldValue('style');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStyle(mixed $value): static
    {
        return $this->setFieldValue('style', $value);
    }

    /**
     * Optional. HTTP or tg:// URL to be opened when the button is pressed. Links `tg://user?id=<user_id>` can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getUrl(): mixed
    {
        return $this->getFieldValue('url');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUrl(mixed $value): static
    {
        return $this->setFieldValue('url', $value);
    }

    /**
     * Optional. Data to be sent in a `CallbackQuery` to the bot when the button is pressed, 1-64 bytes
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCallbackData(): mixed
    {
        return $this->getFieldValue('callback_data');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCallbackData(mixed $value): static
    {
        return $this->setFieldValue('callback_data', $value);
    }

    /**
     * Optional. Description of the [Web App](https://core.telegram.org/bots/webapps) that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method `answerWebAppQuery`. Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a business account.
     *
     * @return WebAppInfo|null
     * @throws Base\TelegramException
     */
    public function getWebApp(): mixed
    {
        return $this->getFieldValue('web_app');
    }

    /**
     * @param WebAppInfo|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWebApp(mixed $value): static
    {
        return $this->setFieldValue('web_app', $value);
    }

    /**
     * Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the [Telegram Login Widget](https://core.telegram.org/widgets/login). Not supported for ephemeral messages.
     *
     * @return LoginUrl|null
     * @throws Base\TelegramException
     */
    public function getLoginUrl(): mixed
    {
        return $this->getFieldValue('login_url');
    }

    /**
     * @param LoginUrl|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLoginUrl(mixed $value): static
    {
        return $this->setFieldValue('login_url', $value);
    }

    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSwitchInlineQuery(): mixed
    {
        return $this->getFieldValue('switch_inline_query');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSwitchInlineQuery(mixed $value): static
    {
        return $this->setFieldValue('switch_inline_query', $value);
    }

    /**
     * Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted. This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options. Not supported in channels and for messages sent in channel direct messages chats and on behalf of a business account.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getSwitchInlineQueryCurrentChat(): mixed
    {
        return $this->getFieldValue('switch_inline_query_current_chat');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSwitchInlineQueryCurrentChat(mixed $value): static
    {
        return $this->setFieldValue('switch_inline_query_current_chat', $value);
    }

    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
     *
     * @return SwitchInlineQueryChosenChat|null
     * @throws Base\TelegramException
     */
    public function getSwitchInlineQueryChosenChat(): mixed
    {
        return $this->getFieldValue('switch_inline_query_chosen_chat');
    }

    /**
     * @param SwitchInlineQueryChosenChat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSwitchInlineQueryChosenChat(mixed $value): static
    {
        return $this->setFieldValue('switch_inline_query_chosen_chat', $value);
    }

    /**
     * Optional. Description of the button that copies the specified text to the clipboard
     *
     * @return CopyTextButton|null
     * @throws Base\TelegramException
     */
    public function getCopyText(): mixed
    {
        return $this->getFieldValue('copy_text');
    }

    /**
     * @param CopyTextButton|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCopyText(mixed $value): static
    {
        return $this->setFieldValue('copy_text', $value);
    }

    /**
     * Optional. Description of the game that will be launched when the user presses the button. **NOTE:** This type of button **must** always be the first button in the first row.
     *
     * @return Games\CallbackGame|null
     * @throws Base\TelegramException
     */
    public function getCallbackGame(): mixed
    {
        return $this->getFieldValue('callback_game');
    }

    /**
     * @param Games\CallbackGame|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCallbackGame(mixed $value): static
    {
        return $this->setFieldValue('callback_game', $value);
    }

    /**
     * Optional. Specify *True*, to send a [Pay button](https://core.telegram.org/bots/api#payments). Substrings “⭐” and “XTR” in the buttons's text will be replaced with a Telegram Star icon. **NOTE:** This type of button **must** always be the first button in the first row and can only be used in invoice messages.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getPay(): mixed
    {
        return $this->getFieldValue('pay');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPay(mixed $value): static
    {
        return $this->setFieldValue('pay', $value);
    }

    /**
     * Optional. If set, then the button is disabled and does nothing
     *
     * @return DisabledButton|null
     * @throws Base\TelegramException
     */
    public function getDisabled(): mixed
    {
        return $this->getFieldValue('disabled');
    }

    /**
     * @param DisabledButton|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDisabled(mixed $value): static
    {
        return $this->setFieldValue('disabled', $value);
    }
}
