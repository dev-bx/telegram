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
 * This object represents a parameter of the inline keyboard button used to automatically authorize a user. It serves as a great replacement for the [Telegram Login Widget](https://core.telegram.org/widgets/login) when the user is coming from Telegram. All the user needs to do is tap/click a button and confirm that they want to log in:
 *
 * Sample bot: [@DiscussBot](https://t.me/discussbot)
 *
 * @link https://core.telegram.org/bots/api#loginurl
 *
 * @property-read string|null $url Required. An HTTPS URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in [Receiving authorization data](https://core.telegram.org/widgets/login#receiving-authorization-data). **NOTE:** You **must** always check the hash of the received data to verify the authentication and the integrity of the data as described in [Checking authorization](https://core.telegram.org/widgets/login#checking-authorization).
 * @property-write string $url
 * @property-read string|null $forwardText Optional. New text of the button in forwarded messages
 * @property-write string $forwardText
 * @property-read string|null $botUsername Optional. Username of a bot, which will be used for user authorization; not supported in `RichMessageButton`. See [Setting up a bot](https://core.telegram.org/widgets/login#setting-up-a-bot) for more details. If not specified, the current bot's username will be assumed. The *url*'s domain must be the same as the domain linked with the bot. See [Linking your domain to the bot](https://core.telegram.org/widgets/login#linking-your-domain-to-the-bot) for more details.
 * @property-write string $botUsername
 * @property-read bool|null $requestWriteAccess Optional. Pass *True* to request the permission for your bot to send messages to the user
 * @property-write bool $requestWriteAccess
 */
class LoginUrl extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'url' => [
                'type' => ['string'],
                'required' => true,
            ],
            'forward_text' => [
                'type' => ['string'],
            ],
            'bot_username' => [
                'type' => ['string'],
            ],
            'request_write_access' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. An HTTPS URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in [Receiving authorization data](https://core.telegram.org/widgets/login#receiving-authorization-data). **NOTE:** You **must** always check the hash of the received data to verify the authentication and the integrity of the data as described in [Checking authorization](https://core.telegram.org/widgets/login#checking-authorization).
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
     * Optional. New text of the button in forwarded messages
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getForwardText(): mixed
    {
        return $this->getFieldValue('forward_text');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setForwardText(mixed $value): static
    {
        return $this->setFieldValue('forward_text', $value);
    }

    /**
     * Optional. Username of a bot, which will be used for user authorization; not supported in `RichMessageButton`. See [Setting up a bot](https://core.telegram.org/widgets/login#setting-up-a-bot) for more details. If not specified, the current bot's username will be assumed. The *url*'s domain must be the same as the domain linked with the bot. See [Linking your domain to the bot](https://core.telegram.org/widgets/login#linking-your-domain-to-the-bot) for more details.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBotUsername(): mixed
    {
        return $this->getFieldValue('bot_username');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBotUsername(mixed $value): static
    {
        return $this->setFieldValue('bot_username', $value);
    }

    /**
     * Optional. Pass *True* to request the permission for your bot to send messages to the user
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getRequestWriteAccess(): mixed
    {
        return $this->getFieldValue('request_write_access');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRequestWriteAccess(mixed $value): static
    {
        return $this->setFieldValue('request_write_access', $value);
    }
}
