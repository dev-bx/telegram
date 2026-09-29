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
 * Use this method to stream a partial rich message to a user while the message is being generated. Note that the streamed draft is ephemeral and acts as a temporary 30-second preview - once the output is finalized, you **must** call `sendRichMessage` with the complete message to persist it in the user's chat. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#sendrichmessagedraft
 *
 * @property-read int|null $chatId Required. Unique identifier for the target private chat
 * @property-write int $chatId
 * @property-read int|null $messageThreadId Optional. Unique identifier for the target message thread
 * @property-write int $messageThreadId
 * @property-read int|null $draftId Required. Unique identifier of the message draft; must be non-zero. Changes to drafts with the same identifier are animated. Otherwise, the draft is replaced without animation.
 * @property-write int $draftId
 * @property-read RichMessages\InputRichMessage|null $richMessage Required. The partial message to be streamed. Direct upload of new files and explicit upload of files by a URL isn't supported.
 * @property-write RichMessages\InputRichMessage|array<string, mixed> $richMessage
 * @property-read bool|null $canStop Optional. Pass *True* to show the user a button to stop further drafts. The bot will receive an `Update` “stopped_message_generation” if the user presses the button.
 * @property-write bool $canStop
 * @property-read bool|null $keepOnStop Optional. Pass *True* to keep the draft in the chat when the button is pressed. The draft will still disappear after a short time or if the bot sends a message. To fully preserve the partial draft, the bot should send it as a new message.
 * @property-write bool $keepOnStop
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the target private chat
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getChatId(): mixed
    {
        return $this->getFieldValue('chat_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChatId(mixed $value): static
    {
        return $this->setFieldValue('chat_id', $value);
    }

    /**
     * Optional. Unique identifier for the target message thread
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
     * Required. Unique identifier of the message draft; must be non-zero. Changes to drafts with the same identifier are animated. Otherwise, the draft is replaced without animation.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getDraftId(): mixed
    {
        return $this->getFieldValue('draft_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDraftId(mixed $value): static
    {
        return $this->setFieldValue('draft_id', $value);
    }

    /**
     * Required. The partial message to be streamed. Direct upload of new files and explicit upload of files by a URL isn't supported.
     *
     * @return RichMessages\InputRichMessage|null
     * @throws Base\TelegramException
     */
    public function getRichMessage(): mixed
    {
        return $this->getFieldValue('rich_message');
    }

    /**
     * @param RichMessages\InputRichMessage|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setRichMessage(mixed $value): static
    {
        return $this->setFieldValue('rich_message', $value);
    }

    /**
     * Optional. Pass *True* to show the user a button to stop further drafts. The bot will receive an `Update` “stopped_message_generation” if the user presses the button.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getCanStop(): mixed
    {
        return $this->getFieldValue('can_stop');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCanStop(mixed $value): static
    {
        return $this->setFieldValue('can_stop', $value);
    }

    /**
     * Optional. Pass *True* to keep the draft in the chat when the button is pressed. The draft will still disappear after a short time or if the bot sends a message. To fully preserve the partial draft, the bot should send it as a new message.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getKeepOnStop(): mixed
    {
        return $this->getFieldValue('keep_on_stop');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setKeepOnStop(mixed $value): static
    {
        return $this->setFieldValue('keep_on_stop', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'sendRichMessageDraft';
    }
}
