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
 * Represents a menu button, which launches a [Web App](https://core.telegram.org/bots/webapps).
 *
 * @link https://core.telegram.org/bots/api#menubuttonwebapp
 *
 * @property-read string|null $type Required. Type of the button, must be *web_app*
 * @property-write string $type
 * @property-read string|null $text Required. Text on the button
 * @property-write string $text
 * @property-read WebAppInfo|null $webApp Required. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method `answerWebAppQuery`. Alternatively, a `t.me` link to a Web App of the bot can be specified in the object instead of the Web App's URL, in which case the Web App will be opened as if the user pressed the link.
 * @property-write WebAppInfo|array<string, mixed> $webApp
 */
class MenuButtonWebApp extends MenuButton
{
    /**
     * @return static
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createInstance($value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [
            'type' => [
                'type' => ['string'],
                'value' => 'web_app',
                'required' => true,
            ],
            'text' => [
                'type' => ['string'],
                'required' => true,
            ],
            'web_app' => [
                'type' => [WebAppInfo::class],
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Type of the button, must be *web_app*
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getType(): mixed
    {
        return $this->getFieldValue('type');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setType(mixed $value): static
    {
        return $this->setFieldValue('type', $value);
    }

    /**
     * Required. Text on the button
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
     * Required. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method `answerWebAppQuery`. Alternatively, a `t.me` link to a Web App of the bot can be specified in the object instead of the Web App's URL, in which case the Web App will be opened as if the user pressed the link.
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
