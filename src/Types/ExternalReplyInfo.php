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
use DevBX\Telegram\Stickers;
use DevBX\Telegram\Games;
use DevBX\Telegram\Payments;


/**
* This object contains information about a message that is being replied to, which may come from another chat or forum topic.
* @property MessageOrigin $origin
* Origin of the message replied to by the given message
* @property Chat $chat
* *Optional*. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
* @property int $messageId
* *Optional*. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
* @property LinkPreviewOptions $linkPreviewOptions
* *Optional*. Options used for link preview generation for the original message, if it is a text message
* @property Animation $animation
* *Optional*. Message is an animation, information about the animation
* @property Audio $audio
* *Optional*. Message is an audio file, information about the file
* @property Document $document
* *Optional*. Message is a general file, information about the file
* @property PaidMediaInfo $paidMedia
* *Optional*. Message contains paid media; information about the paid media
* @property Base\ArrayObject|PhotoSize[] $photo
* *Optional*. Message is a photo, available sizes of the photo
* @property Stickers\Sticker $sticker
* *Optional*. Message is a sticker, information about the sticker
* @property Story $story
* *Optional*. Message is a forwarded story
* @property Video $video
* *Optional*. Message is a video, information about the video
* @property VideoNote $videoNote
* *Optional*. Message is a [video note](https://telegram.org/blog/video-messages-and-telescope), information about the video message
* @property Voice $voice
* *Optional*. Message is a voice message, information about the file
* @property bool $hasMediaSpoiler
* *Optional*. *True*, if the message media is covered by a spoiler animation
* @property Contact $contact
* *Optional*. Message is a shared contact, information about the contact
* @property Dice $dice
* *Optional*. Message is a dice with random value
* @property Games\Game $game
* *Optional*. Message is a game, information about the game. [More about games »](#games)
* @property Giveaway $giveaway
* *Optional*. Message is a scheduled giveaway, information about the giveaway
* @property GiveawayWinners $giveawayWinners
* *Optional*. A giveaway with public winners was completed
* @property Payments\Invoice $invoice
* *Optional*. Message is an invoice for a [payment](#payments), information about the invoice. [More about payments »](#payments)
* @property Location $location
* *Optional*. Message is a shared location, information about the location
* @property Poll $poll
* *Optional*. Message is a native poll, information about the poll
* @property Venue $venue
* *Optional*. Message is a venue, information about the venue
*/

class ExternalReplyInfo extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'origin' => [
				'type' => [MessageOrigin::class],
				'required' => true,
			],
			'chat' => [
				'type' => [Chat::class],
			],
			'message_id' => [
				'type' => ['int'],
			],
			'link_preview_options' => [
				'type' => [LinkPreviewOptions::class],
			],
			'animation' => [
				'type' => [Animation::class],
			],
			'audio' => [
				'type' => [Audio::class],
			],
			'document' => [
				'type' => [Document::class],
			],
			'paid_media' => [
				'type' => [PaidMediaInfo::class],
			],
			'photo' => [
				'type' => [PhotoSize::class],
				'isArray' => true,
			],
			'sticker' => [
				'type' => [Stickers\Sticker::class],
			],
			'story' => [
				'type' => [Story::class],
			],
			'video' => [
				'type' => [Video::class],
			],
			'video_note' => [
				'type' => [VideoNote::class],
			],
			'voice' => [
				'type' => [Voice::class],
			],
			'has_media_spoiler' => [
				'type' => ['bool'],
			],
			'contact' => [
				'type' => [Contact::class],
			],
			'dice' => [
				'type' => [Dice::class],
			],
			'game' => [
				'type' => [Games\Game::class],
			],
			'giveaway' => [
				'type' => [Giveaway::class],
			],
			'giveaway_winners' => [
				'type' => [GiveawayWinners::class],
			],
			'invoice' => [
				'type' => [Payments\Invoice::class],
			],
			'location' => [
				'type' => [Location::class],
			],
			'poll' => [
				'type' => [Poll::class],
			],
			'venue' => [
				'type' => [Venue::class],
			],
		];
	}
	/**
	* @return MessageOrigin
	*/

	public function getOrigin(): mixed
	{
		return $this->getFieldValue('origin');
	}

	/**
	* @param MessageOrigin $value
	* @return static
	*/

	public function setOrigin(mixed $value): static
	{
		return $this->setFieldValue('origin', $value);
	}

	/**
	* @return Chat
	*/

	public function getChat(): mixed
	{
		return $this->getFieldValue('chat');
	}

	/**
	* @param Chat $value
	* @return static
	*/

	public function setChat(mixed $value): static
	{
		return $this->setFieldValue('chat', $value);
	}

	/**
	* @return int
	*/

	public function getMessageId(): mixed
	{
		return $this->getFieldValue('message_id');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMessageId(mixed $value): static
	{
		return $this->setFieldValue('message_id', $value);
	}

	/**
	* @return LinkPreviewOptions
	*/

	public function getLinkPreviewOptions(): mixed
	{
		return $this->getFieldValue('link_preview_options');
	}

	/**
	* @param LinkPreviewOptions $value
	* @return static
	*/

	public function setLinkPreviewOptions(mixed $value): static
	{
		return $this->setFieldValue('link_preview_options', $value);
	}

	/**
	* @return Animation
	*/

	public function getAnimation(): mixed
	{
		return $this->getFieldValue('animation');
	}

	/**
	* @param Animation $value
	* @return static
	*/

	public function setAnimation(mixed $value): static
	{
		return $this->setFieldValue('animation', $value);
	}

	/**
	* @return Audio
	*/

	public function getAudio(): mixed
	{
		return $this->getFieldValue('audio');
	}

	/**
	* @param Audio $value
	* @return static
	*/

	public function setAudio(mixed $value): static
	{
		return $this->setFieldValue('audio', $value);
	}

	/**
	* @return Document
	*/

	public function getDocument(): mixed
	{
		return $this->getFieldValue('document');
	}

	/**
	* @param Document $value
	* @return static
	*/

	public function setDocument(mixed $value): static
	{
		return $this->setFieldValue('document', $value);
	}

	/**
	* @return PaidMediaInfo
	*/

	public function getPaidMedia(): mixed
	{
		return $this->getFieldValue('paid_media');
	}

	/**
	* @param PaidMediaInfo $value
	* @return static
	*/

	public function setPaidMedia(mixed $value): static
	{
		return $this->setFieldValue('paid_media', $value);
	}

	/**
	* @return Base\ArrayObject|PhotoSize[]
	*/

	public function getPhoto(): mixed
	{
		return $this->getFieldValue('photo');
	}

	/**
	* @param Base\ArrayObject|PhotoSize[] $value
	* @return static
	*/

	public function setPhoto(mixed $value): static
	{
		return $this->setFieldValue('photo', $value);
	}

	/**
	* @return Stickers\Sticker
	*/

	public function getSticker(): mixed
	{
		return $this->getFieldValue('sticker');
	}

	/**
	* @param Stickers\Sticker $value
	* @return static
	*/

	public function setSticker(mixed $value): static
	{
		return $this->setFieldValue('sticker', $value);
	}

	/**
	* @return Story
	*/

	public function getStory(): mixed
	{
		return $this->getFieldValue('story');
	}

	/**
	* @param Story $value
	* @return static
	*/

	public function setStory(mixed $value): static
	{
		return $this->setFieldValue('story', $value);
	}

	/**
	* @return Video
	*/

	public function getVideo(): mixed
	{
		return $this->getFieldValue('video');
	}

	/**
	* @param Video $value
	* @return static
	*/

	public function setVideo(mixed $value): static
	{
		return $this->setFieldValue('video', $value);
	}

	/**
	* @return VideoNote
	*/

	public function getVideoNote(): mixed
	{
		return $this->getFieldValue('video_note');
	}

	/**
	* @param VideoNote $value
	* @return static
	*/

	public function setVideoNote(mixed $value): static
	{
		return $this->setFieldValue('video_note', $value);
	}

	/**
	* @return Voice
	*/

	public function getVoice(): mixed
	{
		return $this->getFieldValue('voice');
	}

	/**
	* @param Voice $value
	* @return static
	*/

	public function setVoice(mixed $value): static
	{
		return $this->setFieldValue('voice', $value);
	}

	/**
	* @return bool
	*/

	public function getHasMediaSpoiler(): mixed
	{
		return $this->getFieldValue('has_media_spoiler');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasMediaSpoiler(mixed $value): static
	{
		return $this->setFieldValue('has_media_spoiler', $value);
	}

	/**
	* @return Contact
	*/

	public function getContact(): mixed
	{
		return $this->getFieldValue('contact');
	}

	/**
	* @param Contact $value
	* @return static
	*/

	public function setContact(mixed $value): static
	{
		return $this->setFieldValue('contact', $value);
	}

	/**
	* @return Dice
	*/

	public function getDice(): mixed
	{
		return $this->getFieldValue('dice');
	}

	/**
	* @param Dice $value
	* @return static
	*/

	public function setDice(mixed $value): static
	{
		return $this->setFieldValue('dice', $value);
	}

	/**
	* @return Games\Game
	*/

	public function getGame(): mixed
	{
		return $this->getFieldValue('game');
	}

	/**
	* @param Games\Game $value
	* @return static
	*/

	public function setGame(mixed $value): static
	{
		return $this->setFieldValue('game', $value);
	}

	/**
	* @return Giveaway
	*/

	public function getGiveaway(): mixed
	{
		return $this->getFieldValue('giveaway');
	}

	/**
	* @param Giveaway $value
	* @return static
	*/

	public function setGiveaway(mixed $value): static
	{
		return $this->setFieldValue('giveaway', $value);
	}

	/**
	* @return GiveawayWinners
	*/

	public function getGiveawayWinners(): mixed
	{
		return $this->getFieldValue('giveaway_winners');
	}

	/**
	* @param GiveawayWinners $value
	* @return static
	*/

	public function setGiveawayWinners(mixed $value): static
	{
		return $this->setFieldValue('giveaway_winners', $value);
	}

	/**
	* @return Payments\Invoice
	*/

	public function getInvoice(): mixed
	{
		return $this->getFieldValue('invoice');
	}

	/**
	* @param Payments\Invoice $value
	* @return static
	*/

	public function setInvoice(mixed $value): static
	{
		return $this->setFieldValue('invoice', $value);
	}

	/**
	* @return Location
	*/

	public function getLocation(): mixed
	{
		return $this->getFieldValue('location');
	}

	/**
	* @param Location $value
	* @return static
	*/

	public function setLocation(mixed $value): static
	{
		return $this->setFieldValue('location', $value);
	}

	/**
	* @return Poll
	*/

	public function getPoll(): mixed
	{
		return $this->getFieldValue('poll');
	}

	/**
	* @param Poll $value
	* @return static
	*/

	public function setPoll(mixed $value): static
	{
		return $this->setFieldValue('poll', $value);
	}

	/**
	* @return Venue
	*/

	public function getVenue(): mixed
	{
		return $this->getFieldValue('venue');
	}

	/**
	* @param Venue $value
	* @return static
	*/

	public function setVenue(mixed $value): static
	{
		return $this->setFieldValue('venue', $value);
	}

}