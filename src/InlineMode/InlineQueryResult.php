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

namespace DevBX\Telegram\InlineMode;

use DevBX\Telegram\Base;


/**
 * **Note:** All URLs passed in inline query results will be available to end users and therefore must be assumed to be **public**.
 */
class InlineQueryResult extends Base\BaseType
{
	public static function getRelations(): array
	{
		return [
			InlineQueryResultCachedAudio::class,
			InlineQueryResultCachedDocument::class,
			InlineQueryResultCachedGif::class,
			InlineQueryResultCachedMpeg4Gif::class,
			InlineQueryResultCachedPhoto::class,
			InlineQueryResultCachedSticker::class,
			InlineQueryResultCachedVideo::class,
			InlineQueryResultCachedVoice::class,
			InlineQueryResultArticle::class,
			InlineQueryResultAudio::class,
			InlineQueryResultContact::class,
			InlineQueryResultGame::class,
			InlineQueryResultDocument::class,
			InlineQueryResultGif::class,
			InlineQueryResultLocation::class,
			InlineQueryResultMpeg4Gif::class,
			InlineQueryResultPhoto::class,
			InlineQueryResultVenue::class,
			InlineQueryResultVideo::class,
			InlineQueryResultVoice::class,
		];
	}
	public static function getFields(): array
	{
		return [

		];
	}
}