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
use DevBX\Telegram\Types;

/**
 * Edits a story previously posted by the bot on behalf of a managed business account. Requires the *can\_manage\_stories* business bot right. Returns [Story](#story) on success.
 * @property string $businessConnectionId
 * Unique identifier of the business connection
 * @property int $storyId
 * Unique identifier of the story to edit
 * @property Types\InputStoryContent $content
 * Content of the story
 * @property string $caption
 * Caption of the story, 0-2048 characters after entities parsing
 * @property string $parseMode
 * Mode for parsing entities in the story caption. See [formatting options](#formatting-options) for more details.
 * @property Base\ArrayObject|Types\MessageEntity[] $captionEntities
 * A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
 * @property Base\ArrayObject|Types\StoryArea[] $areas
 * A JSON-serialized list of clickable areas to be shown on the story
 * @method Types\Story send(Api $gateway = null)
 */
class EditStory extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'story_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'content' => [
                'type' => [Types\InputStoryContent::class],
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
            '@return' => [
                'type' => Types\Story::class,
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
    * @return int
    */

    public function getStoryId(): mixed
    {
        return $this->getFieldValue('story_id');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setStoryId(mixed $value): static
    {
        return $this->setFieldValue('story_id', $value);
    }

    /**
    * @return Types\InputStoryContent
    */

    public function getContent(): mixed
    {
        return $this->getFieldValue('content');
    }

    /**
    * @param Types\InputStoryContent $value
    * @return static
    */

    public function setContent(mixed $value): static
    {
        return $this->setFieldValue('content', $value);
    }

    /**
    * @return string
    */

    public function getCaption(): mixed
    {
        return $this->getFieldValue('caption');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setCaption(mixed $value): static
    {
        return $this->setFieldValue('caption', $value);
    }

    /**
    * @return string
    */

    public function getParseMode(): mixed
    {
        return $this->getFieldValue('parse_mode');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setParseMode(mixed $value): static
    {
        return $this->setFieldValue('parse_mode', $value);
    }

    /**
    * @return Base\ArrayObject|Types\MessageEntity[]
    */

    public function getCaptionEntities(): mixed
    {
        return $this->getFieldValue('caption_entities');
    }

    /**
    * @param Base\ArrayObject|Types\MessageEntity[] $value
    * @return static
    */

    public function setCaptionEntities(mixed $value): static
    {
        return $this->setFieldValue('caption_entities', $value);
    }

    /**
    * @return Base\ArrayObject|Types\StoryArea[]
    */

    public function getAreas(): mixed
    {
        return $this->getFieldValue('areas');
    }

    /**
    * @param Base\ArrayObject|Types\StoryArea[] $value
    * @return static
    */

    public function setAreas(mixed $value): static
    {
        return $this->setFieldValue('areas', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'EditStory';
    }
}