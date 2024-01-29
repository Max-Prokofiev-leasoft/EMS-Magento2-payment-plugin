<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Payment\Service\Transaction;

use Payment\Model\Methods\Afterpay;
use Payment\Model\Methods\Banktransfer;
use Payment\Model\Methods\KlarnaPayLater;
use Magento\Framework\Exception\LocalizedException;
use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Model\Order\Payment;
use Payment\Service\Transaction\AbstractTransaction;

/**
 * ProcessRequest transaction class
 */
class ProcessRequest extends AbstractTransaction
{
    /**
     * @param OrderInterface $order
     * @param null|array $transaction
     * @param null|string $testModus
     *
     * @return array
     * @throws LocalizedException
     */
    public function execute(OrderInterface $order, $transaction = null, $testModus = null): array
    {
        return $this->processRequest($order, $transaction, $testModus);
    }
}
