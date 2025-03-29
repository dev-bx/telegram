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

/**
 * Use this method to remove webhook integration if you decide to switch back to [getUpdates](#getupdates). Returns *True* on success.
 * @property bool $dropPendingUpdates
 * Pass *True* to drop all pending updates
 * @method Base\BaseType send(Api $gateway = null)
 */
class DeleteWebhook extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'drop_pending_updates' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
    * @return bool
    */

    public function getDropPendingUpdates(): mixed
    {
        return $this->getFieldValue('drop_pending_updates');
    }

    /**
    * @param bool $value
    * @return static
    */

    public function setDropPendingUpdates(mixed $value): static
    {
        return $this->setFieldValue('drop_pending_updates', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'DeleteWebhook';
    }
}