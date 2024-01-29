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
 * Expired process class
 */
class Expired extends AbstractTransaction
{
    /**
     * @var string
     */
    public $status = 'expired';

    /**
     * Execute "expired" return status
     *
     * @param OrderInterface $order
     * @param string $type
     *
     * @return array
     */
    public function execute(OrderInterface $order, string $type, $customerMessage = ''): array
    {
        return $this->expired($order, $type, $customerMessage);
    }
}
