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

namespace DevBX\Telegram\RichMessages;

use DevBX\Telegram\Base;

/**
 * Describes a rich message to be sent. Exactly **one** of the fields *html*, *markdown*, or *blocks* must be used.
 *
 * @link https://core.telegram.org/bots/api#inputrichmessage
 *
 * @property-read Base\ArrayObject<InputRichBlock> $blocks Optional. Content of the rich message to send described as a list of blocks
 * @property-write list<InputRichBlock|array<string, mixed>>|Base\ArrayObject<InputRichBlock> $blocks
 * @property-read string|null $html Optional. Content of the rich message to send described using HTML formatting. See [rich message formatting options](https://core.telegram.org/bots/api#rich-message-formatting-options) for more details. Use *media* field to specify the media used in the message.
 * @property-write string $html
 * @property-read string|null $markdown Optional. Content of the rich message to send described using Markdown formatting. See [rich message formatting options](https://core.telegram.org/bots/api#rich-message-formatting-options) for more details. Use *media* field to specify the media used in the message.
 * @property-write string $markdown
 * @property-read Base\ArrayObject<InputRichMessageMedia> $media Optional. List of media that are specified in the *markdown* or *html* fields using `tg://photo?id=`, `tg://video?id=`, `tg://document?id=`, and `tg://audio?id=` links
 * @property-write list<InputRichMessageMedia|array<string, mixed>>|Base\ArrayObject<InputRichMessageMedia> $media
 * @property-read bool|null $isRtl Optional. Pass *True* if the rich message must be shown right-to-left
 * @property-write bool $isRtl
 * @property-read bool|null $skipEntityDetection Optional. Pass *True* to skip automatic detection of entities (e.g., URLs, email addresses, username mentions, hashtags, cashtags, bot commands, or phone numbers) in the text
 * @property-write bool $skipEntityDetection
 */
class InputRichMessage extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'blocks' => [
                'type' => [InputRichBlock::class],
                'isArray' => true,
            ],
            'html' => [
                'type' => ['string'],
            ],
            'markdown' => [
                'type' => ['string'],
            ],
            'media' => [
                'type' => [InputRichMessageMedia::class],
                'isArray' => true,
            ],
            'is_rtl' => [
                'type' => ['bool'],
            ],
            'skip_entity_detection' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Optional. Content of the rich message to send described as a list of blocks
     *
     * @return Base\ArrayObject<InputRichBlock>
     * @throws Base\TelegramException
     */
    public function getBlocks(): mixed
    {
        return $this->getFieldValue('blocks');
    }

    /**
     * @param list<InputRichBlock|array<string, mixed>>|Base\ArrayObject<InputRichBlock> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBlocks(mixed $value): static
    {
        return $this->setFieldValue('blocks', $value);
    }

    /**
     * Optional. Content of the rich message to send described using HTML formatting. See [rich message formatting options](https://core.telegram.org/bots/api#rich-message-formatting-options) for more details. Use *media* field to specify the media used in the message.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getHtml(): mixed
    {
        return $this->getFieldValue('html');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHtml(mixed $value): static
    {
        return $this->setFieldValue('html', $value);
    }

    /**
     * Optional. Content of the rich message to send described using Markdown formatting. See [rich message formatting options](https://core.telegram.org/bots/api#rich-message-formatting-options) for more details. Use *media* field to specify the media used in the message.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getMarkdown(): mixed
    {
        return $this->getFieldValue('markdown');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMarkdown(mixed $value): static
    {
        return $this->setFieldValue('markdown', $value);
    }

    /**
     * Optional. List of media that are specified in the *markdown* or *html* fields using `tg://photo?id=`, `tg://video?id=`, `tg://document?id=`, and `tg://audio?id=` links
     *
     * @return Base\ArrayObject<InputRichMessageMedia>
     * @throws Base\TelegramException
     */
    public function getMedia(): mixed
    {
        return $this->getFieldValue('media');
    }

    /**
     * @param list<InputRichMessageMedia|array<string, mixed>>|Base\ArrayObject<InputRichMessageMedia> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMedia(mixed $value): static
    {
        return $this->setFieldValue('media', $value);
    }

    /**
     * Optional. Pass *True* if the rich message must be shown right-to-left
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsRtl(): mixed
    {
        return $this->getFieldValue('is_rtl');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsRtl(mixed $value): static
    {
        return $this->setFieldValue('is_rtl', $value);
    }

    /**
     * Optional. Pass *True* to skip automatic detection of entities (e.g., URLs, email addresses, username mentions, hashtags, cashtags, bot commands, or phone numbers) in the text
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getSkipEntityDetection(): mixed
    {
        return $this->getFieldValue('skip_entity_detection');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSkipEntityDetection(mixed $value): static
    {
        return $this->setFieldValue('skip_entity_detection', $value);
    }
}
