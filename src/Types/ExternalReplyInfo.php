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
use DevBX\Telegram\Games;
use DevBX\Telegram\Payments;
use DevBX\Telegram\Stickers;

/**
 * This object contains information about a message that is being replied to, which may come from another chat or forum topic.
 *
 * @link https://core.telegram.org/bots/api#externalreplyinfo
 *
 * @property-read MessageOrigin|null $origin Required. Origin of the message replied to by the given message
 * @property-write MessageOrigin|array<string, mixed> $origin
 * @property-read Chat|null $chat Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
 * @property-write Chat|array<string, mixed> $chat
 * @property-read int|null $messageId Optional. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
 * @property-write int $messageId
 * @property-read LinkPreviewOptions|null $linkPreviewOptions Optional. Options used for link preview generation for the original message, if it is a text message
 * @property-write LinkPreviewOptions|array<string, mixed> $linkPreviewOptions
 * @property-read Animation|null $animation Optional. Message is an animation, information about the animation
 * @property-write Animation|array<string, mixed> $animation
 * @property-read Audio|null $audio Optional. Message is an audio file, information about the file
 * @property-write Audio|array<string, mixed> $audio
 * @property-read Document|null $document Optional. Message is a general file, information about the file
 * @property-write Document|array<string, mixed> $document
 * @property-read LivePhoto|null $livePhoto Optional. Message is a live photo, information about the live photo
 * @property-write LivePhoto|array<string, mixed> $livePhoto
 * @property-read PaidMediaInfo|null $paidMedia Optional. Message contains paid media; information about the paid media
 * @property-write PaidMediaInfo|array<string, mixed> $paidMedia
 * @property-read Base\ArrayObject<PhotoSize> $photo Optional. Message is a photo, available sizes of the photo
 * @property-write list<PhotoSize|array<string, mixed>>|Base\ArrayObject<PhotoSize> $photo
 * @property-read Stickers\Sticker|null $sticker Optional. Message is a sticker, information about the sticker
 * @property-write Stickers\Sticker|array<string, mixed> $sticker
 * @property-read Story|null $story Optional. Message is a forwarded story
 * @property-write Story|array<string, mixed> $story
 * @property-read Video|null $video Optional. Message is a video, information about the video
 * @property-write Video|array<string, mixed> $video
 * @property-read VideoNote|null $videoNote Optional. Message is a [video note](https://telegram.org/blog/video-messages-and-telescope), information about the video message
 * @property-write VideoNote|array<string, mixed> $videoNote
 * @property-read Voice|null $voice Optional. Message is a voice message, information about the file
 * @property-write Voice|array<string, mixed> $voice
 * @property-read bool|null $hasMediaSpoiler Optional. *True*, if the message media is covered by a spoiler animation
 * @property-write bool $hasMediaSpoiler
 * @property-read Checklist|null $checklist Optional. Message is a checklist
 * @property-write Checklist|array<string, mixed> $checklist
 * @property-read Contact|null $contact Optional. Message is a shared contact, information about the contact
 * @property-write Contact|array<string, mixed> $contact
 * @property-read Dice|null $dice Optional. Message is a dice with random value
 * @property-write Dice|array<string, mixed> $dice
 * @property-read Games\Game|null $game Optional. Message is a game, information about the game. [More about games »](https://core.telegram.org/bots/api#games)
 * @property-write Games\Game|array<string, mixed> $game
 * @property-read Giveaway|null $giveaway Optional. Message is a scheduled giveaway, information about the giveaway
 * @property-write Giveaway|array<string, mixed> $giveaway
 * @property-read GiveawayWinners|null $giveawayWinners Optional. A giveaway with public winners was completed
 * @property-write GiveawayWinners|array<string, mixed> $giveawayWinners
 * @property-read Payments\Invoice|null $invoice Optional. Message is an invoice for a [payment](https://core.telegram.org/bots/api#payments), information about the invoice. [More about payments »](https://core.telegram.org/bots/api#payments)
 * @property-write Payments\Invoice|array<string, mixed> $invoice
 * @property-read Location|null $location Optional. Message is a shared location, information about the location
 * @property-write Location|array<string, mixed> $location
 * @property-read Poll|null $poll Optional. Message is a native poll, information about the poll
 * @property-write Poll|array<string, mixed> $poll
 * @property-read Venue|null $venue Optional. Message is a venue, information about the venue
 * @property-write Venue|array<string, mixed> $venue
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
            'live_photo' => [
                'type' => [LivePhoto::class],
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
            'checklist' => [
                'type' => [Checklist::class],
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
     * Required. Origin of the message replied to by the given message
     *
     * @return MessageOrigin|null
     * @throws Base\TelegramException
     */
    public function getOrigin(): mixed
    {
        return $this->getFieldValue('origin');
    }

    /**
     * @param MessageOrigin|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOrigin(mixed $value): static
    {
        return $this->setFieldValue('origin', $value);
    }

    /**
     * Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
     *
     * @return Chat|null
     * @throws Base\TelegramException
     */
    public function getChat(): mixed
    {
        return $this->getFieldValue('chat');
    }

    /**
     * @param Chat|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChat(mixed $value): static
    {
        return $this->setFieldValue('chat', $value);
    }

    /**
     * Optional. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getMessageId(): mixed
    {
        return $this->getFieldValue('message_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setMessageId(mixed $value): static
    {
        return $this->setFieldValue('message_id', $value);
    }

    /**
     * Optional. Options used for link preview generation for the original message, if it is a text message
     *
     * @return LinkPreviewOptions|null
     * @throws Base\TelegramException
     */
    public function getLinkPreviewOptions(): mixed
    {
        return $this->getFieldValue('link_preview_options');
    }

    /**
     * @param LinkPreviewOptions|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLinkPreviewOptions(mixed $value): static
    {
        return $this->setFieldValue('link_preview_options', $value);
    }

    /**
     * Optional. Message is an animation, information about the animation
     *
     * @return Animation|null
     * @throws Base\TelegramException
     */
    public function getAnimation(): mixed
    {
        return $this->getFieldValue('animation');
    }

    /**
     * @param Animation|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAnimation(mixed $value): static
    {
        return $this->setFieldValue('animation', $value);
    }

    /**
     * Optional. Message is an audio file, information about the file
     *
     * @return Audio|null
     * @throws Base\TelegramException
     */
    public function getAudio(): mixed
    {
        return $this->getFieldValue('audio');
    }

    /**
     * @param Audio|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAudio(mixed $value): static
    {
        return $this->setFieldValue('audio', $value);
    }

    /**
     * Optional. Message is a general file, information about the file
     *
     * @return Document|null
     * @throws Base\TelegramException
     */
    public function getDocument(): mixed
    {
        return $this->getFieldValue('document');
    }

    /**
     * @param Document|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDocument(mixed $value): static
    {
        return $this->setFieldValue('document', $value);
    }

    /**
     * Optional. Message is a live photo, information about the live photo
     *
     * @return LivePhoto|null
     * @throws Base\TelegramException
     */
    public function getLivePhoto(): mixed
    {
        return $this->getFieldValue('live_photo');
    }

    /**
     * @param LivePhoto|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLivePhoto(mixed $value): static
    {
        return $this->setFieldValue('live_photo', $value);
    }

    /**
     * Optional. Message contains paid media; information about the paid media
     *
     * @return PaidMediaInfo|null
     * @throws Base\TelegramException
     */
    public function getPaidMedia(): mixed
    {
        return $this->getFieldValue('paid_media');
    }

    /**
     * @param PaidMediaInfo|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPaidMedia(mixed $value): static
    {
        return $this->setFieldValue('paid_media', $value);
    }

    /**
     * Optional. Message is a photo, available sizes of the photo
     *
     * @return Base\ArrayObject<PhotoSize>
     * @throws Base\TelegramException
     */
    public function getPhoto(): mixed
    {
        return $this->getFieldValue('photo');
    }

    /**
     * @param list<PhotoSize|array<string, mixed>>|Base\ArrayObject<PhotoSize> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPhoto(mixed $value): static
    {
        return $this->setFieldValue('photo', $value);
    }

    /**
     * Optional. Message is a sticker, information about the sticker
     *
     * @return Stickers\Sticker|null
     * @throws Base\TelegramException
     */
    public function getSticker(): mixed
    {
        return $this->getFieldValue('sticker');
    }

    /**
     * @param Stickers\Sticker|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setSticker(mixed $value): static
    {
        return $this->setFieldValue('sticker', $value);
    }

    /**
     * Optional. Message is a forwarded story
     *
     * @return Story|null
     * @throws Base\TelegramException
     */
    public function getStory(): mixed
    {
        return $this->getFieldValue('story');
    }

    /**
     * @param Story|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setStory(mixed $value): static
    {
        return $this->setFieldValue('story', $value);
    }

    /**
     * Optional. Message is a video, information about the video
     *
     * @return Video|null
     * @throws Base\TelegramException
     */
    public function getVideo(): mixed
    {
        return $this->getFieldValue('video');
    }

    /**
     * @param Video|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideo(mixed $value): static
    {
        return $this->setFieldValue('video', $value);
    }

    /**
     * Optional. Message is a [video note](https://telegram.org/blog/video-messages-and-telescope), information about the video message
     *
     * @return VideoNote|null
     * @throws Base\TelegramException
     */
    public function getVideoNote(): mixed
    {
        return $this->getFieldValue('video_note');
    }

    /**
     * @param VideoNote|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVideoNote(mixed $value): static
    {
        return $this->setFieldValue('video_note', $value);
    }

    /**
     * Optional. Message is a voice message, information about the file
     *
     * @return Voice|null
     * @throws Base\TelegramException
     */
    public function getVoice(): mixed
    {
        return $this->getFieldValue('voice');
    }

    /**
     * @param Voice|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVoice(mixed $value): static
    {
        return $this->setFieldValue('voice', $value);
    }

    /**
     * Optional. *True*, if the message media is covered by a spoiler animation
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getHasMediaSpoiler(): mixed
    {
        return $this->getFieldValue('has_media_spoiler');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setHasMediaSpoiler(mixed $value): static
    {
        return $this->setFieldValue('has_media_spoiler', $value);
    }

    /**
     * Optional. Message is a checklist
     *
     * @return Checklist|null
     * @throws Base\TelegramException
     */
    public function getChecklist(): mixed
    {
        return $this->getFieldValue('checklist');
    }

    /**
     * @param Checklist|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setChecklist(mixed $value): static
    {
        return $this->setFieldValue('checklist', $value);
    }

    /**
     * Optional. Message is a shared contact, information about the contact
     *
     * @return Contact|null
     * @throws Base\TelegramException
     */
    public function getContact(): mixed
    {
        return $this->getFieldValue('contact');
    }

    /**
     * @param Contact|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setContact(mixed $value): static
    {
        return $this->setFieldValue('contact', $value);
    }

    /**
     * Optional. Message is a dice with random value
     *
     * @return Dice|null
     * @throws Base\TelegramException
     */
    public function getDice(): mixed
    {
        return $this->getFieldValue('dice');
    }

    /**
     * @param Dice|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDice(mixed $value): static
    {
        return $this->setFieldValue('dice', $value);
    }

    /**
     * Optional. Message is a game, information about the game. [More about games »](https://core.telegram.org/bots/api#games)
     *
     * @return Games\Game|null
     * @throws Base\TelegramException
     */
    public function getGame(): mixed
    {
        return $this->getFieldValue('game');
    }

    /**
     * @param Games\Game|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGame(mixed $value): static
    {
        return $this->setFieldValue('game', $value);
    }

    /**
     * Optional. Message is a scheduled giveaway, information about the giveaway
     *
     * @return Giveaway|null
     * @throws Base\TelegramException
     */
    public function getGiveaway(): mixed
    {
        return $this->getFieldValue('giveaway');
    }

    /**
     * @param Giveaway|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGiveaway(mixed $value): static
    {
        return $this->setFieldValue('giveaway', $value);
    }

    /**
     * Optional. A giveaway with public winners was completed
     *
     * @return GiveawayWinners|null
     * @throws Base\TelegramException
     */
    public function getGiveawayWinners(): mixed
    {
        return $this->getFieldValue('giveaway_winners');
    }

    /**
     * @param GiveawayWinners|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGiveawayWinners(mixed $value): static
    {
        return $this->setFieldValue('giveaway_winners', $value);
    }

    /**
     * Optional. Message is an invoice for a [payment](https://core.telegram.org/bots/api#payments), information about the invoice. [More about payments »](https://core.telegram.org/bots/api#payments)
     *
     * @return Payments\Invoice|null
     * @throws Base\TelegramException
     */
    public function getInvoice(): mixed
    {
        return $this->getFieldValue('invoice');
    }

    /**
     * @param Payments\Invoice|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInvoice(mixed $value): static
    {
        return $this->setFieldValue('invoice', $value);
    }

    /**
     * Optional. Message is a shared location, information about the location
     *
     * @return Location|null
     * @throws Base\TelegramException
     */
    public function getLocation(): mixed
    {
        return $this->getFieldValue('location');
    }

    /**
     * @param Location|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setLocation(mixed $value): static
    {
        return $this->setFieldValue('location', $value);
    }

    /**
     * Optional. Message is a native poll, information about the poll
     *
     * @return Poll|null
     * @throws Base\TelegramException
     */
    public function getPoll(): mixed
    {
        return $this->getFieldValue('poll');
    }

    /**
     * @param Poll|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPoll(mixed $value): static
    {
        return $this->setFieldValue('poll', $value);
    }

    /**
     * Optional. Message is a venue, information about the venue
     *
     * @return Venue|null
     * @throws Base\TelegramException
     */
    public function getVenue(): mixed
    {
        return $this->getFieldValue('venue');
    }

    /**
     * @param Venue|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setVenue(mixed $value): static
    {
        return $this->setFieldValue('venue', $value);
    }
}
