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
* The paid media to send is a photo.
* @property string $type
* Type of the media, must be *photo*
* @property string $media
* File to send. Pass a file\_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. [More information on Sending Files »](#sending-files)</file_attach_name></file_attach_name>
*/

class InputPaidMediaPhoto extends InputPaidMedia
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'photo',
				'required' => true,
			],
			'media' => [
				'type' => ['string'],
				'required' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getType(): mixed
	{
		return $this->getFieldValue('type');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setType(mixed $value): static
	{
		return $this->setFieldValue('type', $value);
	}

	/**
	* @return string
	*/

	public function getMedia(): mixed
	{
		return $this->getFieldValue('media');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setMedia(mixed $value): static
	{
		return $this->setFieldValue('media', $value);
	}

}