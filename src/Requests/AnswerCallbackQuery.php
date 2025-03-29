<?php

/**
 * @project Telegram Bot Api
 * @author Kubeev Ruslan <ruslan@dev-bx.ru>
 * @copyright 2025 Kubeev Ruslan
 * @license MIT
 * @link https://dev-bx.ru/
 *
 * This file is part of the project Telegram Bot Api Class Generator.
 */

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;

/**
 * Use this method to send answers to callback queries sent from [inline keyboards](/bots/features#inline-keyboards). The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, *True* is returned.
 * @property string $callbackQueryId
 * Unique identifier for the query to be answered
 * @property string $text
 * Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
 * @property bool $showAlert
 * If *True*, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to *false*.
 * @property string $url
 * URL that will be opened by the user's client. If you have created a [Game](#game) and accepted the conditions via [@BotFather](https://t.me/botfather), specify the URL that opens your game - note that this will only work if the query comes from a [*callback\_game*](#inlinekeyboardbutton) button.  
  
Otherwise, you may use links like `t.me/your_bot?start=XXXX` that open your bot with a parameter.
 * @property int $cacheTime
 * The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
 * @method Base\BaseType send(Api $gateway = null)
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
        ];
    }

    /**
    * @return string
    */

    public function getCallbackQueryId(): mixed
    {
        return $this->getFieldValue('callback_query_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setCallbackQueryId(mixed $value): static
    {
        return $this->setFieldValue('callback_query_id', $value);
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
    * @return bool
    */

    public function getShowAlert(): mixed
    {
        return $this->getFieldValue('show_alert');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setShowAlert(mixed $value): static
    {
        return $this->setFieldValue('show_alert', $value);
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
    * @return int
    */

    public function getCacheTime(): mixed
    {
        return $this->getFieldValue('cache_time');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setCacheTime(mixed $value): static
    {
        return $this->setFieldValue('cache_time', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'AnswerCallbackQuery';
    }
}