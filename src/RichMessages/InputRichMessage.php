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
 * @property Base\ArrayObject|InputRichBlock[] $blocks
 * *Optional*. Content of the rich message to send described as a list of blocks
 * @property string $html
 * *Optional*. Content of the rich message to send described using HTML formatting. See [rich message formatting options](#rich-message-formatting-options) for more details. Use *media* field to specify the media used in the message.
 * @property string $markdown
 * *Optional*. Content of the rich message to send described using Markdown formatting. See [rich message formatting options](#rich-message-formatting-options) for more details. Use *media* field to specify the media used in the message.
 * @property Base\ArrayObject|InputRichMessageMedia[] $media
 * *Optional*. List of media that are specified in the *markdown* or *html* fields using `tg://photo?id=`, `tg://video?id=`, `tg://document?id=`, and `tg://audio?id=` links
 * @property bool $isRtl
 * *Optional*. Pass *True* if the rich message must be shown right-to-left
 * @property bool $skipEntityDetection
 * *Optional*. Pass *True* to skip automatic detection of entities (e.g., URLs, email addresses, username mentions, hashtags, cashtags, bot commands, or phone numbers) in the text
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
	* @return Base\ArrayObject|InputRichBlock[]
	*/

	public function getBlocks(): mixed
	{
		return $this->getFieldValue('blocks');
	}

	/**
	* @param Base\ArrayObject|InputRichBlock[] $value
	* @return static
	*/

	public function setBlocks(mixed $value): static
	{
		return $this->setFieldValue('blocks', $value);
	}

	/**
	* @return string
	*/

	public function getHtml(): mixed
	{
		return $this->getFieldValue('html');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setHtml(mixed $value): static
	{
		return $this->setFieldValue('html', $value);
	}

	/**
	* @return string
	*/

	public function getMarkdown(): mixed
	{
		return $this->getFieldValue('markdown');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setMarkdown(mixed $value): static
	{
		return $this->setFieldValue('markdown', $value);
	}

	/**
	* @return Base\ArrayObject|InputRichMessageMedia[]
	*/

	public function getMedia(): mixed
	{
		return $this->getFieldValue('media');
	}

	/**
	* @param Base\ArrayObject|InputRichMessageMedia[] $value
	* @return static
	*/

	public function setMedia(mixed $value): static
	{
		return $this->setFieldValue('media', $value);
	}

	/**
	* @return bool
	*/

	public function getIsRtl(): mixed
	{
		return $this->getFieldValue('is_rtl');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsRtl(mixed $value): static
	{
		return $this->setFieldValue('is_rtl', $value);
	}

	/**
	* @return bool
	*/

	public function getSkipEntityDetection(): mixed
	{
		return $this->getFieldValue('skip_entity_detection');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setSkipEntityDetection(mixed $value): static
	{
		return $this->setFieldValue('skip_entity_detection', $value);
	}

}