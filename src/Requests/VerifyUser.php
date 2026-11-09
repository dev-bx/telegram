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
 * Verifies a user [on behalf of the organization](https://telegram.org/verify#third-party-verification) which is represented by the bot. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#verifyuser
 *
 * @property-read int|null $userId Required. Unique identifier of the target user
 * @property-write int $userId
 * @property-read string|null $customDescription Optional. Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
 * @property-write string $customDescription
 * @property-read string|null $customDescriptionParseMode Optional. Mode for parsing entities in the custom description. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details. Only “text_link” entities are supported.
 * @property-write string $customDescriptionParseMode
 * @property-read Base\ArrayObject<Types\MessageEntity> $customDescriptionEntities Optional. A JSON-serialized list of special entities that appear in the custom description, which can be specified instead of *custom_description_parse_mode*. Only “text_link” entities are supported.
 * @property-write list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $customDescriptionEntities
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class VerifyUser extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'user_id' => [
                'type' => ['int'],
                'required' => true,
            ],
            'custom_description' => [
                'type' => ['string'],
            ],
            'custom_description_parse_mode' => [
                'type' => ['string'],
            ],
            'custom_description_entities' => [
                'type' => [Types\MessageEntity::class],
                'isArray' => true,
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the target user
     *
     * @return int|null
     * @throws Base\TelegramException
     */
    public function getUserId(): mixed
    {
        return $this->getFieldValue('user_id');
    }

    /**
     * @param int $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUserId(mixed $value): static
    {
        return $this->setFieldValue('user_id', $value);
    }

    /**
     * Optional. Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCustomDescription(): mixed
    {
        return $this->getFieldValue('custom_description');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCustomDescription(mixed $value): static
    {
        return $this->setFieldValue('custom_description', $value);
    }

    /**
     * Optional. Mode for parsing entities in the custom description. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details. Only “text_link” entities are supported.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getCustomDescriptionParseMode(): mixed
    {
        return $this->getFieldValue('custom_description_parse_mode');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCustomDescriptionParseMode(mixed $value): static
    {
        return $this->setFieldValue('custom_description_parse_mode', $value);
    }

    /**
     * Optional. A JSON-serialized list of special entities that appear in the custom description, which can be specified instead of *custom_description_parse_mode*. Only “text_link” entities are supported.
     *
     * @return Base\ArrayObject<Types\MessageEntity>
     * @throws Base\TelegramException
     */
    public function getCustomDescriptionEntities(): mixed
    {
        return $this->getFieldValue('custom_description_entities');
    }

    /**
     * @param list<Types\MessageEntity|array<string, mixed>>|Base\ArrayObject<Types\MessageEntity> $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setCustomDescriptionEntities(mixed $value): static
    {
        return $this->setFieldValue('custom_description_entities', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'verifyUser';
    }
}
