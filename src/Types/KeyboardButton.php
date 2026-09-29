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

/**
 * This object represents one button of the reply keyboard. At most one of the fields other than *text*, *icon_custom_emoji_id*, and *style* must be used to specify the type of the button. For simple text buttons, *String* can be used instead of this object to specify the button text.
 *
 * @link https://core.telegram.org/bots/api#keyboardbutton
 *
 * @property-read string|null $text Required. Text of the button. If none of the fields other than *text*, *icon_custom_emoji_id*, and *style* are used, it will be sent as a message when the button is pressed.
 * @property-write string $text
 * @property-read string|null $iconCustomEmojiId Optional. Unique identifier of the custom emoji shown before the text of the button. Can only be used by bots that purchased additional usernames on [Fragment](https://fragment.com) or in the messages directly sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram Premium subscription.
 * @property-write string $iconCustomEmojiId
 * @property-read string|null $style Optional. Style of the button. Must be one of “danger” (red), “success” (green) or “primary” (blue). If omitted, then an app-specific style is used.
 * @property-write string $style
 * @property-read KeyboardButtonRequestUsers|null $requestUsers Optional. If specified, pressing the button will open a list of suitable users. Identifiers of selected users will be sent to the bot in a “users_shared” service message. Available in private chats only.
 * @property-write KeyboardButtonRequestUsers|array<string, mixed> $requestUsers
 * @property-read KeyboardButtonRequestChat|null $requestChat Optional. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat_shared” service message. Available in private chats only.
 * @property-write KeyboardButtonRequestChat|array<string, mixed> $requestChat
 * @property-read KeyboardButtonRequestManagedBot|null $requestManagedBot Optional. If specified, pressing the button will ask the user to create and share a bot that will be managed by the current bot. Available for bots that enabled management of other bots in the [@BotFather](https://t.me/BotFather) Mini App. Available in private chats only.
 * @property-write KeyboardButtonRequestManagedBot|array<string, mixed> $requestManagedBot
 * @property-read bool|null $requestContact Optional. If *True*, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
 * @property-write bool $requestContact
 * @property-read bool|null $requestLocation Optional. If *True*, the user's current location will be sent when the button is pressed. Available in private chats only.
 * @property-write bool $requestLocation
 * @property-read KeyboardButtonPollType|null $requestPoll Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
 * @property-write KeyboardButtonPollType|array<string, mixed> $requestPoll
 * @property-read WebAppInfo|null $webApp Optional. If specified, the described [Web App](https://core.telegram.org/bots/webapps) will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only.
 * @property-write WebAppInfo|array<string, mixed> $webApp
 */
class KeyboardButton extends Base\BaseType
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
            'request_users' => [
                'type' => [KeyboardButtonRequestUsers::class],
            ],
            'request_chat' => [
                'type' => [KeyboardButtonRequestChat::class],
            ],
            'request_managed_bot' => [
                'type' => [KeyboardButtonRequestManagedBot::class],
            ],
            'request_contact' => [
                'type' => ['bool'],
            ],
            'request_location' => [
                'type' => ['bool'],
            ],
            'request_poll' => [
                'type' => [KeyboardButtonPollType::class],
            ],
            'web_app' => [
                'type' => [WebAppInfo::class],
            ],
        ];
    }

    /**
     * Required. Text of the button. If none of the fields other than *text*, *icon_custom_emoji_id*, and *style* are used, it will be sent as a message when the button is pressed.
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
     * Optional. If specified, pressing the button will open a list of suitable users. Identifiers of selected users will be sent to the bot in a “users_shared” service message. Available in private chats only.
     *
     * @return KeyboardButtonRequestUsers|null
     * @throws Base\TelegramException
     */
    public function getRequestUsers(): mixed
    {
        return $this->getFieldValue('request_users');
    }

    /**
     * @param KeyboardButtonRequestUsers|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestUsers(mixed $value): static
    {
        return $this->setFieldValue('request_users', $value);
    }

    /**
     * Optional. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat_shared” service message. Available in private chats only.
     *
     * @return KeyboardButtonRequestChat|null
     * @throws Base\TelegramException
     */
    public function getRequestChat(): mixed
    {
        return $this->getFieldValue('request_chat');
    }

    /**
     * @param KeyboardButtonRequestChat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestChat(mixed $value): static
    {
        return $this->setFieldValue('request_chat', $value);
    }

    /**
     * Optional. If specified, pressing the button will ask the user to create and share a bot that will be managed by the current bot. Available for bots that enabled management of other bots in the [@BotFather](https://t.me/BotFather) Mini App. Available in private chats only.
     *
     * @return KeyboardButtonRequestManagedBot|null
     * @throws Base\TelegramException
     */
    public function getRequestManagedBot(): mixed
    {
        return $this->getFieldValue('request_managed_bot');
    }

    /**
     * @param KeyboardButtonRequestManagedBot|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestManagedBot(mixed $value): static
    {
        return $this->setFieldValue('request_managed_bot', $value);
    }

    /**
     * Optional. If *True*, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getRequestContact(): mixed
    {
        return $this->getFieldValue('request_contact');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestContact(mixed $value): static
    {
        return $this->setFieldValue('request_contact', $value);
    }

    /**
     * Optional. If *True*, the user's current location will be sent when the button is pressed. Available in private chats only.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getRequestLocation(): mixed
    {
        return $this->getFieldValue('request_location');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestLocation(mixed $value): static
    {
        return $this->setFieldValue('request_location', $value);
    }

    /**
     * Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
     *
     * @return KeyboardButtonPollType|null
     * @throws Base\TelegramException
     */
    public function getRequestPoll(): mixed
    {
        return $this->getFieldValue('request_poll');
    }

    /**
     * @param KeyboardButtonPollType|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestPoll(mixed $value): static
    {
        return $this->setFieldValue('request_poll', $value);
    }

    /**
     * Optional. If specified, the described [Web App](https://core.telegram.org/bots/webapps) will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only.
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
}
