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
 * Use this method to receive incoming updates using long polling ([wiki](https://en.wikipedia.org/wiki/Push_technology#Long_polling)). Returns an Array of [Update](#update) objects.
 * @property int $offset
 * Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An update is considered confirmed as soon as [getUpdates](#getupdates) is called with an *offset* higher than its *update\_id*. The negative offset can be specified to retrieve updates starting from *-offset* update from the end of the updates queue. All previous updates will be forgotten.
 * @property int $limit
 * Limits the number of updates to be retrieved. Values between 1-100 are accepted. Defaults to 100.
 * @property int $timeout
 * Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive, short polling should be used for testing purposes only.
 * @property string[] $allowedUpdates
 * A JSON-serialized list of the update types you want your bot to receive. For example, specify `["message", "edited_channel_post", "callback_query"]` to only receive updates of these types. See [Update](#update) for a complete list of available update types. Specify an empty list to receive all update types except *chat\_member*, *message\_reaction*, and *message\_reaction\_count* (default). If not specified, the previous setting will be used.  
  
Please note that this parameter doesn't affect updates created before the call to getUpdates, so unwanted updates may be received for a short period of time.
 * @method Types\Update[]|Base\BaseType send(Api $gateway = null)
 */
class GetUpdates extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'offset' => [
                'type' => ['int'],
            ],
            'limit' => [
                'type' => ['int'],
            ],
            'timeout' => [
                'type' => ['int'],
            ],
            'allowed_updates' => [
                'type' => ['string'],
                'isArray' => true,
            ],
            '@return' => [
                'type' => Types\Update::class,
                'isArray' => true,
            ],
        ];
    }

    /**
    * @return int
    */

    public function getOffset(): mixed
    {
        return $this->getFieldValue('offset');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setOffset(mixed $value): static
    {
        return $this->setFieldValue('offset', $value);
    }

    /**
    * @return int
    */

    public function getLimit(): mixed
    {
        return $this->getFieldValue('limit');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setLimit(mixed $value): static
    {
        return $this->setFieldValue('limit', $value);
    }

    /**
    * @return int
    */

    public function getTimeout(): mixed
    {
        return $this->getFieldValue('timeout');
    }

    /**
    * @param int $value
    * @return static
    */

    public function setTimeout(mixed $value): static
    {
        return $this->setFieldValue('timeout', $value);
    }

    /**
    * @return string[]
    */

    public function getAllowedUpdates(): mixed
    {
        return $this->getFieldValue('allowed_updates');
    }

    /**
    * @param string[] $value
    * @return static
    */

    public function setAllowedUpdates(mixed $value): static
    {
        return $this->setFieldValue('allowed_updates', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'GetUpdates';
    }
}