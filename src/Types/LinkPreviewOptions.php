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
 * Describes the options used for link preview generation.
 *
 * @link https://core.telegram.org/bots/api#linkpreviewoptions
 *
 * @property-read bool|null $isDisabled Optional. *True*, if the link preview is disabled
 * @property-write bool $isDisabled
 * @property-read string|null $url Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used.
 * @property-write string $url
 * @property-read bool|null $preferSmallMedia Optional. *True*, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
 * @property-write bool $preferSmallMedia
 * @property-read bool|null $preferLargeMedia Optional. *True*, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
 * @property-write bool $preferLargeMedia
 * @property-read bool|null $showAboveText Optional. *True*, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text
 * @property-write bool $showAboveText
 */
class LinkPreviewOptions extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'is_disabled' => [
                'type' => ['bool'],
            ],
            'url' => [
                'type' => ['string'],
            ],
            'prefer_small_media' => [
                'type' => ['bool'],
            ],
            'prefer_large_media' => [
                'type' => ['bool'],
            ],
            'show_above_text' => [
                'type' => ['bool'],
            ],
        ];
    }

    /**
     * Optional. *True*, if the link preview is disabled
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getIsDisabled(): mixed
    {
        return $this->getFieldValue('is_disabled');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setIsDisabled(mixed $value): static
    {
        return $this->setFieldValue('is_disabled', $value);
    }

    /**
     * Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used.
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getUrl(): mixed
    {
        return $this->getFieldValue('url');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setUrl(mixed $value): static
    {
        return $this->setFieldValue('url', $value);
    }

    /**
     * Optional. *True*, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getPreferSmallMedia(): mixed
    {
        return $this->getFieldValue('prefer_small_media');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPreferSmallMedia(mixed $value): static
    {
        return $this->setFieldValue('prefer_small_media', $value);
    }

    /**
     * Optional. *True*, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getPreferLargeMedia(): mixed
    {
        return $this->getFieldValue('prefer_large_media');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPreferLargeMedia(mixed $value): static
    {
        return $this->setFieldValue('prefer_large_media', $value);
    }

    /**
     * Optional. *True*, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text
     *
     * @return bool|null
     * @throws Base\TelegramException
     */
    public function getShowAboveText(): mixed
    {
        return $this->getFieldValue('show_above_text');
    }

    /**
     * @param bool $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setShowAboveText(mixed $value): static
    {
        return $this->setFieldValue('show_above_text', $value);
    }
}
