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

namespace DevBX\Telegram\Types;

use DevBX\Telegram\Base;


/**
 * This object represents a service message about a user allowing a bot to write messages after adding it to the attachment menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method [requestWriteAccess](/bots/webapps#initializing-mini-apps).
 * @property bool $fromRequest
 * *Optional*. True, if the access was granted after the user accepted an explicit request from a Web App sent by the method [requestWriteAccess](/bots/webapps#initializing-mini-apps)
 * @property string $webAppName
 * *Optional*. Name of the Web App, if the access was granted when the Web App was launched from a link
 * @property bool $fromAttachmentMenu
 * *Optional*. True, if the access was granted when the bot was added to the attachment or side menu
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
	* @return bool
	*/

	public function getFromRequest(): mixed
	{
		return $this->getFieldValue('from_request');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setFromRequest(mixed $value): static
	{
		return $this->setFieldValue('from_request', $value);
	}

	/**
	* @return string
	*/

	public function getWebAppName(): mixed
	{
		return $this->getFieldValue('web_app_name');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setWebAppName(mixed $value): static
	{
		return $this->setFieldValue('web_app_name', $value);
	}

	/**
	* @return bool
	*/

	public function getFromAttachmentMenu(): mixed
	{
		return $this->getFieldValue('from_attachment_menu');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setFromAttachmentMenu(mixed $value): static
	{
		return $this->setFieldValue('from_attachment_menu', $value);
	}

}