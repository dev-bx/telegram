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
use DevBX\Telegram\Types;

/**
 * Changes the profile photo of the bot. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setmyprofilephoto
 *
 * @property-read Types\InputProfilePhoto|null $photo Required. The new profile photo to set
 * @property-write Types\InputProfilePhoto|array<string, mixed> $photo
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SetMyProfilePhoto extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'photo' => [
                'type' => [Types\InputProfilePhoto::class],
                'required' => true,
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. The new profile photo to set
     *
     * @return Types\InputProfilePhoto|null
     * @throws Base\TelegramException
     */
    public function getPhoto(): mixed
    {
        return $this->getFieldValue('photo');
    }

    /**
     * @param Types\InputProfilePhoto|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPhoto(mixed $value): static
    {
        return $this->setFieldValue('photo', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setMyProfilePhoto';
    }
}
