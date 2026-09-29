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
 * Posts a story on behalf of a managed business account. Requires the *can_manage_stories* business bot right. Returns `Story` on success.
 *
 * @link https://core.telegram.org/bots/api#poststory
 *
 * @property-read string|null $businessConnectionId Required. Unique identifier of the business connection
 * @property-write string $businessConnectionId
 * @property-read Types\InputStoryContent|null $content Required. Content of the story
 * @property-write Types\InputStoryContent|array<string, mixed> $content
 * @property-read int|null $activePeriod Required. Period after which the story is moved to the archive, in seconds; must be one of `6 * 3600`, `12 * 3600`, `86400`, or `2 * 86400`
 * @property-write int $activePeriod
 * @property-read string|null $caption Optional. Caption of the story, 0-2048 characters after entities parsing
 * @property-write string $caption
 * @property-read string|null $parseMode Optional. Mode for parsing entities in the story caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
 * @property-write string $parseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $captionEntities Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $captionEntities
 * @property-read Base\ArrayObject<Types\StoryArea> $areas Optional. A JSON-serialized list of clickable areas to be shown on the story
 * @property-write list<Types\StoryArea|array<string, mixed>>|Base\ArrayObject<Types\StoryArea> $areas
 * @property-read bool|null $postToChatPage Optional. Pass *True* to keep the story accessible after it expires
 * @property-write bool $postToChatPage
 * @property-read bool|null $protectContent Optional. Pass *True* if the content of the story must be protected from forwarding and screenshotting
 * @property-write bool $protectContent
 *
 * @method Types\Story send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class PostStory extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'content' => [
                'type' => [Types\InputStoryContent::class],
                'required' => true,
            ],
            'active_period' => [
                'type' => ['int'],
                'required' => true,
            ],
            'caption' => [
                'type' => ['string'],
            ],
            'parse_mode' => [
                'type' => ['string'],
            ],
            'caption_entities' => [
                'type' => [Types\MessageEntity::class],
                'isArray' => true,
            ],
            'areas' => [
                'type' => [Types\StoryArea::class],
                'isArray' => true,
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
     * Required. Content of the story
     *
     * @return Types\InputStoryContent|null
     * @throws Base\TelegramException
     */
    public function getContent(): mixed
    {
        return $this->getFieldValue('content');
    }

    /**
     * @param Types\InputStoryContent|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setContent(mixed $value): static
    {
        return $this->setFieldValue('content', $value);
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
     * Optional. Caption of the story, 0-2048 characters after entities parsing
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCaption(): mixed
    {
        return $this->getFieldValue('caption');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaption(mixed $value): static
    {
        return $this->setFieldValue('caption', $value);
    }

    /**
     * Optional. Mode for parsing entities in the story caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getParseMode(): mixed
    {
        return $this->getFieldValue('parse_mode');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setParseMode(mixed $value): static
    {
        return $this->setFieldValue('parse_mode', $value);
    }

    /**
     * Optional. A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse_mode*
     *
     * @return Base\ArrayObject<Types\MessageEntity>
     * @throws Base\TelegramException
     */
    public function getCaptionEntities(): mixed
    {
        return $this->getFieldValue('caption_entities');
    }

    /**
     * @param list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCaptionEntities(mixed $value): static
    {
        return $this->setFieldValue('caption_entities', $value);
    }

    /**
     * Optional. A JSON-serialized list of clickable areas to be shown on the story
     *
     * @return Base\ArrayObject<Types\StoryArea>
     * @throws Base\TelegramException
     */
    public function getAreas(): mixed
    {
        return $this->getFieldValue('areas');
    }

    /**
     * @param list<Types\StoryArea|array<string, mixed>>|Base\ArrayObject<Types\StoryArea> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAreas(mixed $value): static
    {
        return $this->setFieldValue('areas', $value);
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
        return 'postStory';
    }
}
