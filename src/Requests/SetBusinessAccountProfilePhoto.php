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
 * Changes the profile photo of a managed business account. Requires the *can\_edit\_profile\_photo* business bot right. Returns *True* on success.
 * @property string $businessConnectionId
 * Unique identifier of the business connection
 * @property Types\InputProfilePhoto $photo
 * The new profile photo to set
 * @property bool $isPublic
 * Pass *True* to set the public photo, which will be visible even if the main photo is hidden by the business account's privacy settings. An account can have only one public photo.
 * @method Base\BaseType send(Api $gateway = null)
 */
class SetBusinessAccountProfilePhoto extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'business_connection_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'photo' => [
                'type' => [Types\InputProfilePhoto::class],
                'required' => true,
            ],
            'is_public' => [
                'type' => ['bool'],
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
    * @return Types\InputProfilePhoto
    */

    public function getPhoto(): mixed
    {
        return $this->getFieldValue('photo');
    }

    /**
    * @param Types\InputProfilePhoto $value
    * @return static
    */

    public function setPhoto(mixed $value): static
    {
        return $this->setFieldValue('photo', $value);
    }

    /**
    * @return bool
    */

    public function getIsPublic(): mixed
    {
        return $this->getFieldValue('is_public');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setIsPublic(mixed $value): static
    {
        return $this->setFieldValue('is_public', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'SetBusinessAccountProfilePhoto';
    }
}