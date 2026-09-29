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
use DevBX\Telegram\RichMessages;

/**
 * Use this method to stream a partial rich message to a user while the message is being generated. Note that the streamed draft is ephemeral and acts as a temporary 30-second preview - once the output is finalized, you **must** call [sendRichMessage](#sendrichmessage) with the complete message to persist it in the user's chat. Returns *True* on success.
 * @property int $chatId
 * Unique identifier for the target private chat
 * @property int $messageThreadId
 * Unique identifier for the target message thread
 * @property int $draftId
 * Unique identifier of the message draft; must be non-zero. Changes to drafts with the same identifier are animated. Otherwise, the draft is replaced without animation.
 * @property RichMessages\InputRichMessage $richMessage
 * The partial message to be streamed. Direct upload of new files and explicit upload of files by a URL isn't supported.
 * @property bool $canStop
 * Pass *True* to show the user a button to stop further drafts. The bot will receive an [Update](#update) “stopped\_message\_generation” if the user presses the button.
 * @property bool $keepOnStop
 * Pass *True* to keep the draft in the chat when the button is pressed. The draft will still disappear after a short time or if the bot sends a message. To fully preserve the partial draft, the bot should send it as a new message.
 * @method Base\BaseType send(Api $gateway = null)
 */
class SendRichMessageDraft extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'chat_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'message_thread_id' => [
                'type' => ['int'],
            ],
            'draft_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'rich_message' => [
                'type' => [RichMessages\InputRichMessage::class],
                'required' => true,
            ],
            'can_stop' => [
                'type' => ['bool'],
            ],
            'keep_on_stop' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
    * @return int
    */

    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
    * @param int $value
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
    * @return int
    */

    public function getDraftId(): mixed
    {
        return $this->getFieldValue('draft_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setDraftId(mixed $value): static
    {
        return $this->setFieldValue('draft_id', $value);
    }

    /**
    * @return RichMessages\InputRichMessage
    */

    public function getRichMessage(): mixed
    {
        return $this->getFieldValue('rich_message');
    }

    /**
    * @param RichMessages\InputRichMessage $value
    * @return static
    */

    public function setRichMessage(mixed $value): static
    {
        return $this->setFieldValue('rich_message', $value);
    }

    /**
    * @return bool
    */

    public function getCanStop(): mixed
    {
        return $this->getFieldValue('can_stop');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setCanStop(mixed $value): static
    {
        return $this->setFieldValue('can_stop', $value);
    }

    /**
    * @return bool
    */

    public function getKeepOnStop(): mixed
    {
        return $this->getFieldValue('keep_on_stop');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setKeepOnStop(mixed $value): static
    {
        return $this->setFieldValue('keep_on_stop', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SendRichMessageDraft';
    }
}