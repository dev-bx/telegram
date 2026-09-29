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
use DevBX\Telegram\Types;


/**
 * A block with a voice note, corresponding to the HTML tag `<audio>`.
 * @property string $type
 * Type of the block, always “voice\_note”
 * @property Types\InputMediaVoiceNote $voiceNote
 * The voice note. Caption is ignored.
 * @property RichBlockCaption $caption
 * *Optional*. Caption of the block
 */
class InputRichBlockVoiceNote extends InputRichBlock
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'value' => 'voice_note',
				'required' => true,
			],
			'voice_note' => [
				'type' => [Types\InputMediaVoiceNote::class],
				'required' => true,
			],
			'caption' => [
				'type' => [RichBlockCaption::class],
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
	* @return Types\InputMediaVoiceNote
	*/

	public function getVoiceNote(): mixed
	{
		return $this->getFieldValue('voice_note');
	}

	/**
	* @param Types\InputMediaVoiceNote $value
	* @return static
	*/

	public function setVoiceNote(mixed $value): static
	{
		return $this->setFieldValue('voice_note', $value);
	}

	/**
	* @return RichBlockCaption
	*/

	public function getCaption(): mixed
	{
		return $this->getFieldValue('caption');
	}

	/**
	* @param RichBlockCaption $value
	* @return static
	*/

	public function setCaption(mixed $value): static
	{
		return $this->setFieldValue('caption', $value);
	}

}