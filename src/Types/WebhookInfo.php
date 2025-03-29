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
 * Describes the current status of a webhook.
 * @property string $url
 * Webhook URL, may be empty if webhook is not set up
 * @property bool $hasCustomCertificate
 * *True*, if a custom certificate was provided for webhook certificate checks
 * @property int $pendingUpdateCount
 * Number of updates awaiting delivery
 * @property string $ipAddress
 * *Optional*. Currently used webhook IP address
 * @property int $lastErrorDate
 * *Optional*. Unix time for the most recent error that happened when trying to deliver an update via webhook
 * @property string $lastErrorMessage
 * *Optional*. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
 * @property int $lastSynchronizationErrorDate
 * *Optional*. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters
 * @property int $maxConnections
 * *Optional*. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
 * @property string[] $allowedUpdates
 * *Optional*. A list of update types the bot is subscribed to. Defaults to all update types except *chat\_member*
 */
class WebhookInfo extends Base\BaseType
{
	public static function getFields(): array
	{
		return [
			'url' => [
				'type' => ['string'],
				'required' => true,
			],
			'has_custom_certificate' => [
				'type' => ['bool'],
				'required' => true,
			],
			'pending_update_count' => [
				'type' => ['int'],
				'required' => true,
			],
			'ip_address' => [
				'type' => ['string'],
			],
			'last_error_date' => [
				'type' => ['int'],
			],
			'last_error_message' => [
				'type' => ['string'],
			],
			'last_synchronization_error_date' => [
				'type' => ['int'],
			],
			'max_connections' => [
				'type' => ['int'],
			],
			'allowed_updates' => [
				'type' => ['string'],
				'isArray' => true,
			],
		];
	}
	/**
	* @return string
	*/

	public function getUrl(): mixed
	{
		return $this->getFieldValue('url');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setUrl(mixed $value): static
	{
		return $this->setFieldValue('url', $value);
	}

	/**
	* @return bool
	*/

	public function getHasCustomCertificate(): mixed
	{
		return $this->getFieldValue('has_custom_certificate');
	}

	/**
	* @param bool $value
	* @return static
	*/

	public function setHasCustomCertificate(mixed $value): static
	{
		return $this->setFieldValue('has_custom_certificate', $value);
	}

	/**
	* @return int
	*/

	public function getPendingUpdateCount(): mixed
	{
		return $this->getFieldValue('pending_update_count');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setPendingUpdateCount(mixed $value): static
	{
		return $this->setFieldValue('pending_update_count', $value);
	}

	/**
	* @return string
	*/

	public function getIpAddress(): mixed
	{
		return $this->getFieldValue('ip_address');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setIpAddress(mixed $value): static
	{
		return $this->setFieldValue('ip_address', $value);
	}

	/**
	* @return int
	*/

	public function getLastErrorDate(): mixed
	{
		return $this->getFieldValue('last_error_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setLastErrorDate(mixed $value): static
	{
		return $this->setFieldValue('last_error_date', $value);
	}

	/**
	* @return string
	*/

	public function getLastErrorMessage(): mixed
	{
		return $this->getFieldValue('last_error_message');
	}

	/**
	* @param string $value
	* @return static
	*/

	public function setLastErrorMessage(mixed $value): static
	{
		return $this->setFieldValue('last_error_message', $value);
	}

	/**
	* @return int
	*/

	public function getLastSynchronizationErrorDate(): mixed
	{
		return $this->getFieldValue('last_synchronization_error_date');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setLastSynchronizationErrorDate(mixed $value): static
	{
		return $this->setFieldValue('last_synchronization_error_date', $value);
	}

	/**
	* @return int
	*/

	public function getMaxConnections(): mixed
	{
		return $this->getFieldValue('max_connections');
	}

	/**
	* @param int $value
	* @return static
	*/

	public function setMaxConnections(mixed $value): static
	{
		return $this->setFieldValue('max_connections', $value);
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

}