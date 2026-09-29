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

/**
 * Converts a given regular gift to Telegram Stars. Requires the *can_convert_gifts_to_stars* business bot right. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#convertgifttostars
 *
 * @property-read string|null $businessConnectionId Required. Unique identifier of the business connection
 * @property-write string $businessConnectionId
 * @property-read string|null $ownedGiftId Required. Unique identifier of the regular gift that should be converted to Telegram Stars
 * @property-write string $ownedGiftId
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class ConvertGiftToStars extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'owned_gift_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the business connection
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
     * Required. Unique identifier of the regular gift that should be converted to Telegram Stars
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getOwnedGiftId(): mixed
    {
        return $this->getFieldValue('owned_gift_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setOwnedGiftId(mixed $value): static
    {
        return $this->setFieldValue('owned_gift_id', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'convertGiftToStars';
    }
}
