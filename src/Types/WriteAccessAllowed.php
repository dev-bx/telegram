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
 * This object represents a service message about a user allowing a bot to write messages after adding it to the attachment menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method [requestWriteAccess](https://core.telegram.org/bots/webapps#initializing-mini-apps).
 *
 * @link https://core.telegram.org/bots/api#writeaccessallowed
 *
 * @property-read bool|null $fromRequest Optional. *True*, if the access was granted after the user accepted an explicit request from a Web App sent by the method [requestWriteAccess](https://core.telegram.org/bots/webapps#initializing-mini-apps)
 * @property-write bool $fromRequest
 * @property-read string|null $webAppName Optional. Name of the Web App, if the access was granted when the Web App was launched from a link
 * @property-write string $webAppName
 * @property-read bool|null $fromAttachmentMenu Optional. *True*, if the access was granted when the bot was added to the attachment or side menu
 * @property-write bool $fromAttachmentMenu
 */
class WriteAccessAllowed extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'from_request' => [
                'type' => ['bool'],
            ],
            'web_app_name' => [
                'type' => ['string'],
            ],
            'from_attachment_menu' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Optional. *True*, if the access was granted after the user accepted an explicit request from a Web App sent by the method [requestWriteAccess](https://core.telegram.org/bots/webapps#initializing-mini-apps)
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getFromRequest(): mixed
    {
        return $this->getFieldValue('from_request');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFromRequest(mixed $value): static
    {
        return $this->setFieldValue('from_request', $value);
    }

    /**
     * Optional. Name of the Web App, if the access was granted when the Web App was launched from a link
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getWebAppName(): mixed
    {
        return $this->getFieldValue('web_app_name');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setWebAppName(mixed $value): static
    {
        return $this->setFieldValue('web_app_name', $value);
    }

    /**
     * Optional. *True*, if the access was granted when the bot was added to the attachment or side menu
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getFromAttachmentMenu(): mixed
    {
        return $this->getFieldValue('from_attachment_menu');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setFromAttachmentMenu(mixed $value): static
    {
        return $this->setFieldValue('from_attachment_menu', $value);
    }
}
