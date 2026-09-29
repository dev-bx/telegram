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
use DevBX\Telegram\Types;

/**
 * Reposts a story on behalf of a business account from another business account. Both business accounts must be managed by the same bot, and the story on the source account must have been posted (or reposted) by the bot. Requires the *can_manage_stories* business bot right for both business accounts. Returns `Story` on success.
 *
 * @link https://core.telegram.org/bots/api#repoststory
 *
 * @property-read string|null $businessConnectionId Required. Unique identifier of the business connection
 * @property-write string $businessConnectionId
 * @property-read int|null $fromChatId Required. Unique identifier of the chat which posted the story that should be reposted
 * @property-write int $fromChatId
 * @property-read int|null $fromStoryId Required. Unique identifier of the story that should be reposted
 * @property-write int $fromStoryId
 * @property-read int|null $activePeriod Required. Period after which the story is moved to the archive, in seconds; must be one of `6 * 3600`, `12 * 3600`, `86400`, or `2 * 86400`
 * @property-write int $activePeriod
 * @property-read bool|null $postToChatPage Optional. Pass *True* to keep the story accessible after it expires
 * @property-write bool $postToChatPage
 * @property-read bool|null $protectContent Optional. Pass *True* if the content of the story must be protected from forwarding and screenshotting
 * @property-write bool $protectContent
 *
 * @method Types\Story send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class RepostStory extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'from_chat_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'from_story_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'active_period' => [
                'type' => ['int'],
                'required' => true,
            ],
            'post_to_chat_page' => [
                'type' => ['bool'],
            ],
            'protect_content' => [
                'type' => ['bool'],
            ],
            '@return' => [
                'type' => [Types\Story::class],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the business connection
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
     * Required. Unique identifier of the chat which posted the story that should be reposted
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getFromChatId(): mixed
    {
        return $this->getFieldValue('from_chat_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFromChatId(mixed $value): static
    {
        return $this->setFieldValue('from_chat_id', $value);
    }

    /**
     * Required. Unique identifier of the story that should be reposted
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getFromStoryId(): mixed
    {
        return $this->getFieldValue('from_story_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFromStoryId(mixed $value): static
    {
        return $this->setFieldValue('from_story_id', $value);
    }

    /**
     * Required. Period after which the story is moved to the archive, in seconds; must be one of `6 * 3600`, `12 * 3600`, `86400`, or `2 * 86400`
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getActivePeriod(): mixed
    {
        return $this->getFieldValue('active_period');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setActivePeriod(mixed $value): static
    {
        return $this->setFieldValue('active_period', $value);
    }

    /**
     * Optional. Pass *True* to keep the story accessible after it expires
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getPostToChatPage(): mixed
    {
        return $this->getFieldValue('post_to_chat_page');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPostToChatPage(mixed $value): static
    {
        return $this->setFieldValue('post_to_chat_page', $value);
    }

    /**
     * Optional. Pass *True* if the content of the story must be protected from forwarding and screenshotting
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getProtectContent(): mixed
    {
        return $this->getFieldValue('protect_content');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setProtectContent(mixed $value): static
    {
        return $this->setFieldValue('protect_content', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'repostStory';
    }
}
