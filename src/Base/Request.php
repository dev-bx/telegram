<?php

namespace DevBX\Telegram\Base;

use DevBX\Telegram\Types;

/**
 * Запрос к методу Bot API: поля — параметры метода, send() выполняет запрос.
 *
 * @phpstan-import-type UploadFile from BaseType
 */
abstract class Request extends BaseType
{
    /** @var array<string, Types\InputFile|UploadFile> */
    protected $atachments = [];

    abstract protected function getRequestMethod(): string;

    /**
     * Файл для ссылки вида attach://<name> в параметрах (InputMedia, InputSticker и т.п.).
     *
     * @param UploadFile $attachment
     */
    public function addAttachment(string $name, array $attachment): static
    {
        $this->atachments[$name] = $attachment;

        return $this;
    }

    /**
     * @param array<string, Types\InputFile|UploadFile> $attachments
     */
    public function setAttachments(array $attachments): static
    {
        $this->atachments = $attachments;

        return $this;
    }

    /**
     * @param Api|null $gateway Клиент; по умолчанию — последний созданный (Api::getInstance())
     * @throws TelegramException
     */
    public function send(?Api $gateway = null): mixed
    {
        if ($gateway === null) {
            $gateway = Api::getInstance();
            if (!$gateway)
            {
                throw new TelegramException('API Gateway not initialized');
            }
        }

        $params = $this->jsonSerialize();

        return $gateway->query($this->getRequestMethod(), is_array($params) ? $params : [], $this, $this->atachments);
    }

}
