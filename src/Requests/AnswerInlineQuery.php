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

namespace DevBX\Telegram\Requests;

use DevBX\Telegram\Base;
use DevBX\Telegram\Api;
use DevBX\Telegram\InlineMode;

/**
 * Use this method to send answers to an inline query. On success, *True* is returned.
 * No more than **50** results per query are allowed.
 *
 * @link https://core.telegram.org/bots/api#answerinlinequery
 *
 * @property-read string|null $inlineQueryId Required. Unique identifier for the answered query
 * @property-write string $inlineQueryId
 * @property-read Base\ArrayObject<InlineMode\InlineQueryResult> $results Required. A JSON-serialized Array of results for the inline query
 * @property-write list<InlineMode\InlineQueryResult|array<string, mixed>>|Base\ArrayObject<InlineMode\InlineQueryResult> $results
 * @property-read int|null $cacheTime Optional. The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
 * @property-write int $cacheTime
 * @property-read bool|null $isPersonal Optional. Pass *True* if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query.
 * @property-write bool $isPersonal
 * @property-read string|null $nextOffset Optional. Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
 * @property-write string $nextOffset
 * @property-read InlineMode\InlineQueryResultsButton|null $button Optional. A JSON-serialized object describing a button to be shown above inline query results
 * @property-write InlineMode\InlineQueryResultsButton|array<string, mixed> $button
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
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
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier for the answered query
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getInlineQueryId(): mixed
    {
        return $this->getFieldValue('inline_query_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setInlineQueryId(mixed $value): static
    {
        return $this->setFieldValue('inline_query_id', $value);
    }

    /**
     * Required. A JSON-serialized Array of results for the inline query
     *
     * @return Base\ArrayObject<InlineMode\InlineQueryResult>
     * @throws Base\TelegramException
     */
    public function getResults(): mixed
    {
        return $this->getFieldValue('results');
    }

    /**
     * @param list<InlineMode\InlineQueryResult|array<string, mixed>>|Base\ArrayObject<InlineMode\InlineQueryResult> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setResults(mixed $value): static
    {
        return $this->setFieldValue('results', $value);
    }

    /**
     * Optional. The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getCacheTime(): mixed
    {
        return $this->getFieldValue('cache_time');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCacheTime(mixed $value): static
    {
        return $this->setFieldValue('cache_time', $value);
    }

    /**
     * Optional. Pass *True* if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query.
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsPersonal(): mixed
    {
        return $this->getFieldValue('is_personal');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsPersonal(mixed $value): static
    {
        return $this->setFieldValue('is_personal', $value);
    }

    /**
     * Optional. Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getNextOffset(): mixed
    {
        return $this->getFieldValue('next_offset');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setNextOffset(mixed $value): static
    {
        return $this->setFieldValue('next_offset', $value);
    }

    /**
     * Optional. A JSON-serialized object describing a button to be shown above inline query results
     *
     * @return InlineMode\InlineQueryResultsButton|null
     * @throws Base\TelegramException
     */
    public function getButton(): mixed
    {
        return $this->getFieldValue('button');
    }

    /**
     * @param InlineMode\InlineQueryResultsButton|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setButton(mixed $value): static
    {
        return $this->setFieldValue('button', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'answerInlineQuery';
    }
}
