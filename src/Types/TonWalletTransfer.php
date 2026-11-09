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
 * Describes a service message about a transfer with a TON wallet.
 *
 * @link https://core.telegram.org/bots/api#tonwallettransfer
 *
 * @property-read string|null $transactionId Required. Unique identifier of the transaction; may be empty if the transfer hasn't been sent yet
 * @property-write string $transactionId
 * @property-read string|null $peerAddress Required. Address of the transfer peer in the TON blockchain
 * @property-write string $peerAddress
 * @property-read string|null $amount Required. The amount of transferred cryptocurrency, in the *smallest units* of the cryptocurrency, as a decimal number; negative for outgoing transfers
 * @property-write string $amount
 * @property-read string|null $comment Optional. Comment added to the transfer; omitted if the comment is encrypted
 * @property-write string $comment
 */
class TonWalletTransfer extends Base\BaseType
{
    public static function getFields(): array
    {
        return [
            'transaction_id' => [
                'type' => ['string'],
                'required' => true,
            ],
            'peer_address' => [
                'type' => ['string'],
                'required' => true,
            ],
            'amount' => [
                'type' => ['string'],
                'required' => true,
            ],
            'comment' => [
                'type' => ['string'],
            ],
        ];
    }

    /**
     * Required. Unique identifier of the transaction; may be empty if the transfer hasn't been sent yet
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getTransactionId(): mixed
    {
        return $this->getFieldValue('transaction_id');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setTransactionId(mixed $value): static
    {
        return $this->setFieldValue('transaction_id', $value);
    }

    /**
     * Required. Address of the transfer peer in the TON blockchain
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getPeerAddress(): mixed
    {
        return $this->getFieldValue('peer_address');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setPeerAddress(mixed $value): static
    {
        return $this->setFieldValue('peer_address', $value);
    }

    /**
     * Required. The amount of transferred cryptocurrency, in the *smallest units* of the cryptocurrency, as a decimal number; negative for outgoing transfers
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getAmount(): mixed
    {
        return $this->getFieldValue('amount');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setAmount(mixed $value): static
    {
        return $this->setFieldValue('amount', $value);
    }

    /**
     * Optional. Comment added to the transfer; omitted if the comment is encrypted
     *
     * @return string|null
     * @throws Base\TelegramException
     */
    public function getComment(): mixed
    {
        return $this->getFieldValue('comment');
    }

    /**
     * @param string $value
     * @return $this
     * @throws Base\TelegramException
     */
    public function setComment(mixed $value): static
    {
        return $this->setFieldValue('comment', $value);
    }
}
