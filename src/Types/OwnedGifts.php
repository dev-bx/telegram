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
 * Contains the list of gifts received and owned by a user or a chat.
 *
 * @link https://core.telegram.org/bots/api#ownedgifts
 *
 * @property-read int|null $totalCount Required. The total number of gifts owned by the user or the chat
 * @property-write int $totalCount
 * @property-read Base\ArrayObject<OwnedGift> $gifts Required. The list of gifts
 * @property-write list<OwnedGift|array<string, mixed>>|Base\ArrayObject<OwnedGift> $gifts
 * @property-read string|null $nextOffset Optional. Offset for the next request. If empty, then there are no more results.
 * @property-write string $nextOffset
 */
class OwnedGifts extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'total_count' => [
                'type' => ['int'],
                'required' => true,
            ],
            'gifts' => [
                'type' => [OwnedGift::class],
                'isArray' => true,
                'required' => true,
            ],
            'next_offset' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. The total number of gifts owned by the user or the chat
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getTotalCount(): mixed
    {
        return $this->getFieldValue('total_count');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTotalCount(mixed $value): static
    {
        return $this->setFieldValue('total_count', $value);
    }

    /**
     * Required. The list of gifts
     *
     * @return Base\ArrayObject<OwnedGift>
     * @throws Base\TelegramException
     */
    public function getGifts(): mixed
    {
        return $this->getFieldValue('gifts');
    }

    /**
     * @param list<OwnedGift|array<string, mixed>>|Base\ArrayObject<OwnedGift> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setGifts(mixed $value): static
    {
        return $this->setFieldValue('gifts', $value);
    }

    /**
     * Optional. Offset for the next request. If empty, then there are no more results.
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
}
