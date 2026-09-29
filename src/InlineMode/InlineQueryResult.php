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

namespace DevBX\Telegram\InlineMode;

use DevBX\Telegram\Base;

/**
 * This object represents one result of an inline query. Telegram clients currently support results of the following 20 types:
 *
 * - `InlineQueryResultCachedAudio`
 * - `InlineQueryResultCachedDocument`
 * - `InlineQueryResultCachedGif`
 * - `InlineQueryResultCachedMpeg4Gif`
 * - `InlineQueryResultCachedPhoto`
 * - `InlineQueryResultCachedSticker`
 * - `InlineQueryResultCachedVideo`
 * - `InlineQueryResultCachedVoice`
 * - `InlineQueryResultArticle`
 * - `InlineQueryResultAudio`
 * - `InlineQueryResultContact`
 * - `InlineQueryResultGame`
 * - `InlineQueryResultDocument`
 * - `InlineQueryResultGif`
 * - `InlineQueryResultLocation`
 * - `InlineQueryResultMpeg4Gif`
 * - `InlineQueryResultPhoto`
 * - `InlineQueryResultVenue`
 * - `InlineQueryResultVideo`
 * - `InlineQueryResultVoice`
 *
 * **Note:** All URLs passed in inline query results will be available to end users and therefore must be assumed to be **public**.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresult
 *
 * Объединение: create() возвращает подходящий вариант — `InlineQueryResultCachedAudio`, `InlineQueryResultCachedDocument`, `InlineQueryResultCachedGif`, `InlineQueryResultCachedMpeg4Gif`, `InlineQueryResultCachedPhoto`, `InlineQueryResultCachedSticker`, `InlineQueryResultCachedVideo`, `InlineQueryResultCachedVoice`, `InlineQueryResultArticle`, `InlineQueryResultAudio`, `InlineQueryResultContact`, `InlineQueryResultGame`, `InlineQueryResultDocument`, `InlineQueryResultGif`, `InlineQueryResultLocation`, `InlineQueryResultMpeg4Gif`, `InlineQueryResultPhoto`, `InlineQueryResultVenue`, `InlineQueryResultVideo`, `InlineQueryResultVoice`.
 */
class InlineQueryResult extends Base\BaseType
{
    /**
     * @return list<class-string<InlineQueryResultCachedAudio|InlineQueryResultCachedDocument|InlineQueryResultCachedGif|InlineQueryResultCachedMpeg4Gif|InlineQueryResultCachedPhoto|InlineQueryResultCachedSticker|InlineQueryResultCachedVideo|InlineQueryResultCachedVoice|InlineQueryResultArticle|InlineQueryResultAudio|InlineQueryResultContact|InlineQueryResultGame|InlineQueryResultDocument|InlineQueryResultGif|InlineQueryResultLocation|InlineQueryResultMpeg4Gif|InlineQueryResultPhoto|InlineQueryResultVenue|InlineQueryResultVideo|InlineQueryResultVoice>>
     */
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

    /**
     * Создаёт вариант объединения, подходящий под значение (по полю-дискриминатору и обязательным полям).
     *
     * @return InlineQueryResultCachedAudio|InlineQueryResultCachedDocument|InlineQueryResultCachedGif|InlineQueryResultCachedMpeg4Gif|InlineQueryResultCachedPhoto|InlineQueryResultCachedSticker|InlineQueryResultCachedVideo|InlineQueryResultCachedVoice|InlineQueryResultArticle|InlineQueryResultAudio|InlineQueryResultContact|InlineQueryResultGame|InlineQueryResultDocument|InlineQueryResultGif|InlineQueryResultLocation|InlineQueryResultMpeg4Gif|InlineQueryResultPhoto|InlineQueryResultVenue|InlineQueryResultVideo|InlineQueryResultVoice|null null — значение не подошло ни одному варианту (только в нестрогом режиме)
     * @throws Base\TelegramException
     */
    public static function create(mixed $value = null, bool $ignoreUnknownFields = false): ?Base\BaseType
    {
        return static::createFromRelations(static::getRelations(), $value, $ignoreUnknownFields);
    }

    public static function getFields(): array
    {
        return [];
    }
}
