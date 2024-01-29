<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Payment\Service\Transaction\Process;

use Magento\Sales\Api\Data\OrderInterface;
use Payment\Service\Transaction\AbstractTransaction;

/**
 * Unknown process class
 */
class Unknown extends AbstractTransaction
{
    /**
     * Execute unkown return status
     *
     * @param OrderInterface $order
     * @param string $type
     * @param string $status
     *
     * @return array
     */
    public function execute(OrderInterface $order, string $type, string $status): array
    {
        return $this->unknown($order, $type, $status);
    }
}
