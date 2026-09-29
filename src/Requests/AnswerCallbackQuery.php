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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;

/**
 * Use this method to send answers to callback queries sent from [inline keyboards](https://core.telegram.org/bots/features#inline-keyboards). The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, *True* is returned.
 *
 * Alternatively, the user can be redirected to the specified Game URL. For this option to work, you must first create a game for your bot via [@BotFather](https://t.me/botfather) and accept the terms. Otherwise, you may use links like `t.me/your_bot?start=XXXX` that open your bot with a parameter.
 *
 * @link https://core.telegram.org/bots/api#answercallbackquery
 *
 * @property-read string|null $callbackQueryId Required. Unique identifier for the query to be answered
 * @property-write string $callbackQueryId
 * @property-read string|null $text Optional. Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters.
 * @property-write string $text
 * @property-read bool|null $showAlert Optional. If *True*, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to *False*.
 * @property-write bool $showAlert
 * @property-read string|null $url Optional. URL that will be opened by the user's client. If you have created a `Game` and accepted the conditions via [@BotFather](https://t.me/botfather), specify the URL that opens your game - note that this will only work if the query comes from a `InlineKeyboardButton` button. Otherwise, you may use links like `t.me/your_bot?start=XXXX` that open your bot with a parameter.
 * @property-write string $url
 * @property-read int|null $cacheTime Optional. The maximum amount of time in seconds that the result of the callback query may be cached client-side. Defaults to 0.
 * @property-write int $cacheTime
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class AnswerCallbackQuery extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'callback_query_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'text' => [
                'type' => ['string'],
            ],
            'show_alert' => [
                'type' => ['bool'],
            ],
            'url' => [
                'type' => ['string'],
            ],
            'cache_time' => [
                'type' => ['int'],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the query to be answered
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCallbackQueryId(): mixed
    {
        return $this->getFieldValue('callback_query_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCallbackQueryId(mixed $value): static
    {
        return $this->setFieldValue('callback_query_id', $value);
    }

    /**
     * Optional. Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters.
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
     * Optional. If *True*, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to *False*.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getShowAlert(): mixed
    {
        return $this->getFieldValue('show_alert');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShowAlert(mixed $value): static
    {
        return $this->setFieldValue('show_alert', $value);
    }

    /**
     * Optional. URL that will be opened by the user's client. If you have created a `Game` and accepted the conditions via [@BotFather](https://t.me/botfather), specify the URL that opens your game - note that this will only work if the query comes from a `InlineKeyboardButton` button. Otherwise, you may use links like `t.me/your_bot?start=XXXX` that open your bot with a parameter.
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
     * Optional. The maximum amount of time in seconds that the result of the callback query may be cached client-side. Defaults to 0.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getCacheTime(): mixed
    {
        return $this->getFieldValue('cache_time');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCacheTime(mixed $value): static
    {
        return $this->setFieldValue('cache_time', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'answerCallbackQuery';
    }
}
