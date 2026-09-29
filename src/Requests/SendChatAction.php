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
 * Use this method when you need to tell the user that something is happening on the bot's side. The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear its typing status). Returns *True* on success.
 *
 * Example: The [ImageBot](https://t.me/imagebot) needs some time to process a request and upload the image. Instead of sending a text message along the lines of “Retrieving image, please wait…”, the bot may use `sendChatAction` with *action* = *upload_photo*. The user will see a “sending photo” status for the bot.
 *
 * We only recommend using this method when a response from the bot will take a **noticeable** amount of time to arrive.
 *
 * @link https://core.telegram.org/bots/api#sendchataction
 *
 * @property-read string|null $businessConnectionId Optional. Unique identifier of the business connection on behalf of which the action will be sent
 * @property-write string $businessConnectionId
 * @property-read int|string|null $chatId Required. Unique identifier for the target chat or username of the target bot or supergroup in the format `@username`. Channel chats and channel direct messages chats aren't supported.
 * @property-write int|string $chatId
 * @property-read int|null $messageThreadId Optional. Unique identifier for the target message thread or topic of a forum; for supergroups and private chats of bots with forum topic mode enabled only
 * @property-write int $messageThreadId
 * @property-read string|null $action Required. Type of action to broadcast. Choose one, depending on what the user is about to receive: *typing* for `sendMessage`, *upload_photo* for `sendPhoto`, *record_video* or *upload_video* for `sendVideo`, *record_voice* or *upload_voice* for `sendVoice`, *upload_document* for `sendDocument`, *choose_sticker* for `sendSticker`, *find_location* for `sendLocation`, *record_video_note* or *upload_video_note* for `sendVideoNote`.
 * @property-write string $action
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SendChatAction extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
            ],
            'chat_id' => [
                'type' => ['int', 'string'],
                'required' => true,
            ],
            'message_thread_id' => [
                'type' => ['int'],
            ],
            'action' => [
                'type' => ['string'],
                'required' => true,
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Optional. Unique identifier of the business connection on behalf of which the action will be sent
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
     * Required. Unique identifier for the target chat or username of the target bot or supergroup in the format `@username`. Channel chats and channel direct messages chats aren't supported.
     *
     * @return int|string|null
     * @throws Base\TelegramException
     */
    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
     * @param int|string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
     * Optional. Unique identifier for the target message thread or topic of a forum; for supergroups and private chats of bots with forum topic mode enabled only
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMessageThreadId(): mixed
    {
        return $this->getFieldValue('message_thread_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageThreadId(mixed $value): static
    {
        return $this->setFieldValue('message_thread_id', $value);
    }

    /**
     * Required. Type of action to broadcast. Choose one, depending on what the user is about to receive: *typing* for `sendMessage`, *upload_photo* for `sendPhoto`, *record_video* or *upload_video* for `sendVideo`, *record_voice* or *upload_voice* for `sendVoice`, *upload_document* for `sendDocument`, *choose_sticker* for `sendSticker`, *find_location* for `sendLocation`, *record_video_note* or *upload_video_note* for `sendVideoNote`.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getAction(): mixed
    {
        return $this->getFieldValue('action');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAction(mixed $value): static
    {
        return $this->setFieldValue('action', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'sendChatAction';
    }
}
