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
use DevBX\Telegram\Types;

/**
 * Changes the privacy settings pertaining to incoming gifts in a managed business account. Requires the *can\_change\_gift\_settings* business bot right. Returns *True* on success.
 * @property string $businessConnectionId
 * Unique identifier of the business connection
 * @property bool $showGiftButton
 * Pass *True*, if a button for sending a gift to the user or by the business account must always be shown in the input field
 * @property Types\AcceptedGiftTypes $acceptedGiftTypes
 * Types of gifts accepted by the business account
 * @method Base\BaseType send(Api $gateway = null)
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
        ];
    }

    /**
    * @return string
    */

    public function getBusinessConnectionId(): mixed
    {
        return $this->getFieldValue('business_connection_id');
    }

    /**
    * @param string $value
    * @return static
    */

    public function setBusinessConnectionId(mixed $value): static
    {
        return $this->setFieldValue('business_connection_id', $value);
    }

    /**
    * @return bool
    */

    public function getShowGiftButton(): mixed
    {
        return $this->getFieldValue('show_gift_button');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setShowGiftButton(mixed $value): static
    {
        return $this->setFieldValue('show_gift_button', $value);
    }

    /**
    * @return Types\AcceptedGiftTypes
    */

    public function getAcceptedGiftTypes(): mixed
    {
        return $this->getFieldValue('accepted_gift_types');
    }

    /**
    * @param Types\AcceptedGiftTypes $value
    * @return static
    */

    public function setAcceptedGiftTypes(mixed $value): static
    {
        return $this->setFieldValue('accepted_gift_types', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetBusinessAccountGiftSettings';
    }
}