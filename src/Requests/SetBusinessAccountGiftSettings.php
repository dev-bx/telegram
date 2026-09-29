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
 * Changes the privacy settings pertaining to incoming gifts in a managed business account. Requires the *can_change_gift_settings* business bot right. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#setbusinessaccountgiftsettings
 *
 * @property-read string|null $businessConnectionId Required. Unique identifier of the business connection
 * @property-write string $businessConnectionId
 * @property-read bool|null $showGiftButton Required. Pass *True* if a button for sending a gift to the user or by the business account must always be shown in the input field
 * @property-write bool $showGiftButton
 * @property-read Types\AcceptedGiftTypes|null $acceptedGiftTypes Required. Types of gifts accepted by the business account
 * @property-write Types\AcceptedGiftTypes|array<string, mixed> $acceptedGiftTypes
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class SetBusinessAccountGiftSettings extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'show_gift_button' => [
                'type' => ['bool'],
                'required' => true,
            ],
            'accepted_gift_types' => [
                'type' => [Types\AcceptedGiftTypes::class],
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
     * Required. Pass *True* if a button for sending a gift to the user or by the business account must always be shown in the input field
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getShowGiftButton(): mixed
    {
        return $this->getFieldValue('show_gift_button');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShowGiftButton(mixed $value): static
    {
        return $this->setFieldValue('show_gift_button', $value);
    }

    /**
     * Required. Types of gifts accepted by the business account
     *
     * @return Types\AcceptedGiftTypes|null
     * @throws Base\TelegramException
     */
    public function getAcceptedGiftTypes(): mixed
    {
        return $this->getFieldValue('accepted_gift_types');
    }

    /**
     * @param Types\AcceptedGiftTypes|array<string, mixed> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAcceptedGiftTypes(mixed $value): static
    {
        return $this->setFieldValue('accepted_gift_types', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'setBusinessAccountGiftSettings';
    }
}
