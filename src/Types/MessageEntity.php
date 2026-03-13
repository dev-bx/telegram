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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;


/**
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 * @property string $type
 * Type of the entity. Currently, can be “mention” (`@username`), “hashtag” (`#hashtag` or `#hashtag@chatusername`), “cashtag” (`$USD` or `$USD@chatusername`), “bot\_command” (`/start@jobs_bot`), “url” (`https://telegram.org`), “email” (`do-not-reply@telegram.org`), “phone\_number” (`+1-212-555-0123`), “bold” (**bold text**), “italic” (*italic text*), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “expandable\_blockquote” (collapsed-by-default block quotation), “code” (monowidth string), “pre” (monowidth block), “text\_link” (for clickable text URLs), “text\_mention” (for users [without usernames](https://telegram.org/blog/edit#new-mentions)), “custom\_emoji” (for inline custom emoji stickers), or “date\_time” (for formatted date and time)
 * @property int $offset
 * Offset in [UTF-16 code units](/api/entities#entity-length) to the start of the entity
 * @property int $length
 * Length of the entity in [UTF-16 code units](/api/entities#entity-length)
 * @property string $url
 * *Optional*. For “text\_link” only, URL that will be opened after user taps on the text
 * @property User $user
 * *Optional*. For “text\_mention” only, the mentioned user
 * @property string $language
 * *Optional*. For “pre” only, the programming language of the entity text
 * @property string $customEmojiId
 * *Optional*. For “custom\_emoji” only, unique identifier of the custom emoji. Use [getCustomEmojiStickers](#getcustomemojistickers) to get full information about the sticker
 * @property int $unixTime
 * *Optional*. For “date\_time” only, the Unix time associated with the entity
 * @property string $dateTimeFormat
 * *Optional*. For “date\_time” only, the string that defines the formatting of the date and time. See [date-time entity formatting](#date-time-entity-formatting) for more details.
 */
class MessageEntity extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'type' => [
				'type' => ['string'],
				'required' => true,
			],
			'offset' => [
				'type' => ['int'],
				'required' => true,
			],
			'length' => [
				'type' => ['int'],
				'required' => true,
			],
			'url' => [
				'type' => ['string'],
			],
			'user' => [
				'type' => [User::class],
			],
			'language' => [
				'type' => ['string'],
			],
			'custom_emoji_id' => [
				'type' => ['string'],
			],
			'unix_time' => [
				'type' => ['int'],
			],
			'date_time_format' => [
				'type' => ['string'],
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
	* @return int
	*/

	public function getOffset(): mixed
	{
		return $this->getFieldValue('offset');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setOffset(mixed $value): static
	{
		return $this->setFieldValue('offset', $value);
	}

	/**
	* @return int
	*/

	public function getLength(): mixed
	{
		return $this->getFieldValue('length');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setLength(mixed $value): static
	{
		return $this->setFieldValue('length', $value);
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
	* @return User
	*/

	public function getUser(): mixed
	{
		return $this->getFieldValue('user');
	}

	/**
	* @param User $value
	* @return static
	*/

	public function setUser(mixed $value): static
	{
		return $this->setFieldValue('user', $value);
	}

	/**
	* @return string
	*/

	public function getLanguage(): mixed
	{
		return $this->getFieldValue('language');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setLanguage(mixed $value): static
	{
		return $this->setFieldValue('language', $value);
	}

	/**
	* @return string
	*/

	public function getCustomEmojiId(): mixed
	{
		return $this->getFieldValue('custom_emoji_id');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setCustomEmojiId(mixed $value): static
	{
		return $this->setFieldValue('custom_emoji_id', $value);
	}

	/**
	* @return int
	*/

	public function getUnixTime(): mixed
	{
		return $this->getFieldValue('unix_time');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setUnixTime(mixed $value): static
	{
		return $this->setFieldValue('unix_time', $value);
	}

	/**
	* @return string
	*/

	public function getDateTimeFormat(): mixed
	{
		return $this->getFieldValue('date_time_format');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setDateTimeFormat(mixed $value): static
	{
		return $this->setFieldValue('date_time_format', $value);
	}

}