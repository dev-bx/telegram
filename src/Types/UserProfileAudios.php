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
 * This object represents the audios displayed on a user's profile.
 *
 * @link https://core.telegram.org/bots/api#userprofileaudios
 *
 * @property-read int|null $totalCount Required. Total number of profile audios for the target user
 * @property-write int $totalCount
 * @property-read Base\ArrayObject<Audio> $audios Required. Requested profile audios
 * @property-write list<Audio|array<string, mixed>>|Base\ArrayObject<Audio> $audios
 */
class UserProfileAudios extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'total_count' => [
                'type' => ['int'],
                'required' => true,
            ],
            'audios' => [
                'type' => [Audio::class],
                'isArray' => true,
                'required' => true,
            ],
        ];
    }

    /**
     * Required. Total number of profile audios for the target user
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
     * Required. Requested profile audios
     *
     * @return Base\ArrayObject<Audio>
     * @throws Base\TelegramException
     */
    public function getAudios(): mixed
    {
        return $this->getFieldValue('audios');
    }

    /**
     * @param list<Audio|array<string, mixed>>|Base\ArrayObject<Audio> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAudios(mixed $value): static
    {
        return $this->setFieldValue('audios', $value);
    }
}
