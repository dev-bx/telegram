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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;


/**
* Describes the options used for link preview generation.
* @property bool $isDisabled
* *Optional*. *True*, if the link preview is disabled
* @property string $url
* *Optional*. URL to use for the link preview. If empty, then the first URL found in the message text will be used
* @property bool $preferSmallMedia
* *Optional*. *True*, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
* @property bool $preferLargeMedia
* *Optional*. *True*, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
* @property bool $showAboveText
* *Optional*. *True*, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text
*/

class LinkPreviewOptions extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'is_disabled' => [
				'type' => ['bool'],
			],
			'url' => [
				'type' => ['string'],
			],
			'prefer_small_media' => [
				'type' => ['bool'],
			],
			'prefer_large_media' => [
				'type' => ['bool'],
			],
			'show_above_text' => [
				'type' => ['bool'],
			],
		];
	}
	/**
	* @return bool
	*/

	public function getIsDisabled(): mixed
	{
		return $this->getFieldValue('is_disabled');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setIsDisabled(mixed $value): static
	{
		return $this->setFieldValue('is_disabled', $value);
	}

	/**
	* @return string
	*/

	public function getUrl(): mixed
	{
		return $this->getFieldValue('url');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setUrl(mixed $value): static
	{
		return $this->setFieldValue('url', $value);
	}

	/**
	* @return bool
	*/

	public function getPreferSmallMedia(): mixed
	{
		return $this->getFieldValue('prefer_small_media');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setPreferSmallMedia(mixed $value): static
	{
		return $this->setFieldValue('prefer_small_media', $value);
	}

	/**
	* @return bool
	*/

	public function getPreferLargeMedia(): mixed
	{
		return $this->getFieldValue('prefer_large_media');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setPreferLargeMedia(mixed $value): static
	{
		return $this->setFieldValue('prefer_large_media', $value);
	}

	/**
	* @return bool
	*/

	public function getShowAboveText(): mixed
	{
		return $this->getFieldValue('show_above_text');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setShowAboveText(mixed $value): static
	{
		return $this->setFieldValue('show_above_text', $value);
	}

}