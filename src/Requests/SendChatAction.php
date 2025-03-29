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
 * We only recommend using this method when a response from the bot will take a **noticeable** amount of time to arrive.
 * @property string $businessConnectionId
 * Unique identifier of the business connection on behalf of which the action will be sent
 * @property int|string $chatId
 * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
 * @property int $messageThreadId
 * Unique identifier for the target message thread; for supergroups only
 * @property string $action
 * Type of action to broadcast. Choose one, depending on what the user is about to receive: *typing* for [text messages](#sendmessage), *upload\_photo* for [photos](#sendphoto), *record\_video* or *upload\_video* for [videos](#sendvideo), *record\_voice* or *upload\_voice* for [voice notes](#sendvoice), *upload\_document* for [general files](#senddocument), *choose\_sticker* for [stickers](#sendsticker), *find\_location* for [location data](#sendlocation), *record\_video\_note* or *upload\_video\_note* for [video notes](#sendvideonote).
 * @method Base\BaseType send(Api $gateway = null)
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
        ];
    }

    /**
    * @return string
    */

    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
    * @return int|string
    */

    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
    * @param int|string $value
    * @return static
    */

    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
    * @return int
    */

    public function getMessageThreadId(): mixed
    {
        return $this->getFieldValue('message_thread_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setMessageThreadId(mixed $value): static
    {
        return $this->setFieldValue('message_thread_id', $value);
    }

    /**
    * @return string
    */

    public function getAction(): mixed
    {
        return $this->getFieldValue('action');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setAction(mixed $value): static
    {
        return $this->setFieldValue('action', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SendChatAction';
    }
}