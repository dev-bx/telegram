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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\InlineMode;

/**
 * Use this method to send answers to an inline query. On success, *True* is returned.  
No more than **50** results per query are allowed.
 * @property string $inlineQueryId
 * Unique identifier for the answered query
 * @property Base\ArrayObject|InlineMode\InlineQueryResult[] $results
 * A JSON-serialized array of results for the inline query
 * @property int $cacheTime
 * The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
 * @property bool $isPersonal
 * Pass *True* if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query.
 * @property string $nextOffset
 * Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
 * @property InlineMode\InlineQueryResultsButton $button
 * A JSON-serialized object describing a button to be shown above inline query results
 * @method Base\BaseType send(Api $gateway = null)
 */
class AnswerInlineQuery extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'inline_query_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'results' => [
                'type' => [InlineMode\InlineQueryResult::class],
                'isArray' => true,
                'required' => true,
            ],
            'cache_time' => [
                'type' => ['int'],
            ],
            'is_personal' => [
                'type' => ['bool'],
            ],
            'next_offset' => [
                'type' => ['string'],
            ],
            'button' => [
                'type' => [InlineMode\InlineQueryResultsButton::class],
            ],
        ];
    }

    /**
    * @return string
    */

    public function getInlineQueryId(): mixed
    {
        return $this->getFieldValue('inline_query_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setInlineQueryId(mixed $value): static
    {
        return $this->setFieldValue('inline_query_id', $value);
    }

    /**
    * @return Base\ArrayObject|InlineMode\InlineQueryResult[]
    */

    public function getResults(): mixed
    {
        return $this->getFieldValue('results');
    }

    /**
    * @param Base\ArrayObject|InlineMode\InlineQueryResult[] $value
    * @return static
    */

    public function setResults(mixed $value): static
    {
        return $this->setFieldValue('results', $value);
    }

    /**
    * @return int
    */

    public function getCacheTime(): mixed
    {
        return $this->getFieldValue('cache_time');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setCacheTime(mixed $value): static
    {
        return $this->setFieldValue('cache_time', $value);
    }

    /**
    * @return bool
    */

    public function getIsPersonal(): mixed
    {
        return $this->getFieldValue('is_personal');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setIsPersonal(mixed $value): static
    {
        return $this->setFieldValue('is_personal', $value);
    }

    /**
    * @return string
    */

    public function getNextOffset(): mixed
    {
        return $this->getFieldValue('next_offset');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setNextOffset(mixed $value): static
    {
        return $this->setFieldValue('next_offset', $value);
    }

    /**
    * @return InlineMode\InlineQueryResultsButton
    */

    public function getButton(): mixed
    {
        return $this->getFieldValue('button');
    }

    /**
    * @param InlineMode\InlineQueryResultsButton $value
    * @return static
    */

    public function setButton(mixed $value): static
    {
        return $this->setFieldValue('button', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'AnswerInlineQuery';
    }
}