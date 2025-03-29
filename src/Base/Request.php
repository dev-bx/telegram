<?php

namespace DevBX\Telegram\Base;

abstract class Request extends BaseType
{
    protected $atachments = [];

    abstract protected function getRequestMethod(): string;

    public function addAttachment($name, array $attachment): static
    {
        $this->atachments[$name] = $attachment;

        return $this;
    }

    public function setAttachments(array $attachments): static
    {
        $this->atachments = $attachments;

        return $this;
    }

    public function send(Api $gateway = null): mixed
    {
        if ($gateway === null) {
            $gateway = Api::getInstance();
            if (!$gateway)
            {
                throw new \Exception('API Gateway not initialized');
            }
        }

        return $gateway->query($this->getRequestMethod(), $this->jsonSerialize(), $this, $this->atachments);
    }

}