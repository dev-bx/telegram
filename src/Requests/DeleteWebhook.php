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
 * Use this method to remove webhook integration if you decide to switch back to `getUpdates`. Returns *True* on success.
 *
 * @link https://core.telegram.org/bots/api#deletewebhook
 *
 * @property-read bool|null $dropPendingUpdates Optional. Pass *True* to drop all pending updates
 * @property-write bool $dropPendingUpdates
 *
 * @method Base\ParameterBool send(?Api $gateway = null) Выполняет запрос через $gateway (по умолчанию — Api::getInstance())
 */
class DeleteWebhook extends Base\Request
{
    public static function getFields(): array
    {
        return [
            'drop_pending_updates' => [
                'type' => ['bool'],
            ],
            '@return' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Optional. Pass *True* to drop all pending updates
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getDropPendingUpdates(): mixed
    {
        return $this->getFieldValue('drop_pending_updates');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setDropPendingUpdates(mixed $value): static
    {
        return $this->setFieldValue('drop_pending_updates', $value);
    }

    protected function getRequestMethod(): string
    {
        return 'deleteWebhook';
    }
}
