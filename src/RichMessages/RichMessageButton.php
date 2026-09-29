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
 * This object represents a button in a `RichMessage`. Exactly one of the fields other than *text* and *style* must be used to specify the type of the button.
 *
 * @link https://core.telegram.org/bots/api#richmessagebutton
 *
 * @property-read RichText|string|list<mixed>|null $text Required. Text of the button. May contain only plain text, `RichTextCustomEmoji` and `RichTextDateTime` entities.
 * @property-write RichText|string|list<mixed>|array<string, mixed> $text
 * @property-read string|null $style Optional. Style of the button. Must be one of “danger”, “success”, “primary”, or “link” (the button is shown as a regular link without borders). Apps may use theme-specific colors for the button background and text based on the style. The style “link” is allowed only for callback buttons.
 * @property-write string $style
 * @property-read string|null $url Optional. HTTP or tg:// URL to be opened when the button is pressed. Links `tg://user?id=<user_id>` can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings.
 * @property-write string $url
 * @property-read string|null $callbackData Optional. Data to be sent in a `CallbackQuery` to the bot when the button is pressed, 1-64 bytes
 * @property-write string $callbackData
 * @property-read Types\WebAppInfo|null $webApp Optional. Description of the [Web App](https://core.telegram.org/bots/webapps) that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method `answerWebAppQuery`. Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a business account.
 * @property-write Types\WebAppInfo|array<string, mixed> $webApp
 * @property-read Types\LoginUrl|null $loginUrl Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the [Telegram Login Widget](https://core.telegram.org/widgets/login). Not supported for ephemeral messages.
 * @property-write Types\LoginUrl|array<string, mixed> $loginUrl
 * @property-read string|null $switchInlineQuery Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
 * @property-write string $switchInlineQuery
 * @property-read string|null $switchInlineQueryCurrentChat Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted. Not supported in channels and for messages sent in channel direct messages chats and on behalf of a business account.
 * @property-write string $switchInlineQueryCurrentChat
 * @property-read Types\SwitchInlineQueryChosenChat|null $switchInlineQueryChosenChat Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
 * @property-write Types\SwitchInlineQueryChosenChat|array<string, mixed> $switchInlineQueryChosenChat
 * @property-read Types\CopyTextButton|null $copyText Optional. A button that copies the specified text to the clipboard
 * @property-write Types\CopyTextButton|array<string, mixed> $copyText
 * @property-read Types\DisabledButton|null $disabled Optional. If set, then the button is disabled and does nothing
 * @property-write Types\DisabledButton|array<string, mixed> $disabled
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
     * Required. Text of the button. May contain only plain text, `RichTextCustomEmoji` and `RichTextDateTime` entities.
     *
     * @return RichText|string|list<mixed>|null
     * @throws Base\TelegramException
     */
    public function getText(): mixed
    {
        return $this->getFieldValue('text');
    }

    /**
     * @param RichText|string|list<mixed>|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setText(mixed $value): static
    {
        return $this->setFieldValue('text', $value);
    }

    /**
     * Optional. Style of the button. Must be one of “danger”, “success”, “primary”, or “link” (the button is shown as a regular link without borders). Apps may use theme-specific colors for the button background and text based on the style. The style “link” is allowed only for callback buttons.
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
     * @return Types\WebAppInfo|null
     * @throws Base\TelegramException
     */
    public function getWebApp(): mixed
    {
        return $this->getFieldValue('web_app');
    }

    /**
     * @param Types\WebAppInfo|array<string, mixed> $value
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
     * @return Types\LoginUrl|null
     * @throws Base\TelegramException
     */
    public function getLoginUrl(): mixed
    {
        return $this->getFieldValue('login_url');
    }

    /**
     * @param Types\LoginUrl|array<string, mixed> $value
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
     * Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted. Not supported in channels and for messages sent in channel direct messages chats and on behalf of a business account.
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
     * @return Types\SwitchInlineQueryChosenChat|null
     * @throws Base\TelegramException
     */
    public function getSwitchInlineQueryChosenChat(): mixed
    {
        return $this->getFieldValue('switch_inline_query_chosen_chat');
    }

    /**
     * @param Types\SwitchInlineQueryChosenChat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSwitchInlineQueryChosenChat(mixed $value): static
    {
        return $this->setFieldValue('switch_inline_query_chosen_chat', $value);
    }

    /**
     * Optional. A button that copies the specified text to the clipboard
     *
     * @return Types\CopyTextButton|null
     * @throws Base\TelegramException
     */
    public function getCopyText(): mixed
    {
        return $this->getFieldValue('copy_text');
    }

    /**
     * @param Types\CopyTextButton|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCopyText(mixed $value): static
    {
        return $this->setFieldValue('copy_text', $value);
    }

    /**
     * Optional. If set, then the button is disabled and does nothing
     *
     * @return Types\DisabledButton|null
     * @throws Base\TelegramException
     */
    public function getDisabled(): mixed
    {
        return $this->getFieldValue('disabled');
    }

    /**
     * @param Types\DisabledButton|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDisabled(mixed $value): static
    {
        return $this->setFieldValue('disabled', $value);
    }
}
