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
 * Use this method to process a received chat join request query by showing a Mini App to the user before deciding the outcome. Call `answerChatJoinRequestQuery` to resolve the join request query based on the user interaction with the Mini App. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#sendchatjoinrequestwebapp
 *
 * @property-read string|null $chatJoinRequestQueryId Required. Unique identifier of the join request query
 * @property-write string $chatJoinRequestQueryId
 * @property-read string|null $webAppUrl Required. An HTTPS URL of a Web App to be opened with additional data as specified in [Initializing Web Apps](https://core.telegram.org/bots/webapps#initializing-mini-apps)
 * @property-write string $webAppUrl
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SendChatJoinRequestWebApp extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_join_request_query_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'web_app_url' => [
                'type' => ['string'],
                'required' => true,
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the join request query
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getChatJoinRequestQueryId(): mixed
    {
        return $this->getFieldValue('chat_join_request_query_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatJoinRequestQueryId(mixed $value): static
    {
        return $this->setFieldValue('chat_join_request_query_id', $value);
    }

    /**
     * Required. An HTTPS URL of a Web App to be opened with additional data as specified in [Initializing Web Apps](https://core.telegram.org/bots/webapps#initializing-mini-apps)
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getWebAppUrl(): mixed
    {
        return $this->getFieldValue('web_app_url');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWebAppUrl(mixed $value): static
    {
        return $this->setFieldValue('web_app_url', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'sendChatJoinRequestWebApp';
    }
}
