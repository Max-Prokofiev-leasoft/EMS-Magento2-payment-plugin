<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Payment\Service\Order;

use Payment\Redefiners\Service\ServiceOrderRedefiner;
use Payment\Api\Config\RepositoryInterface as ConfigRepository;
use Magento\Framework\App\ProductMetadataInterface ;

/**
 * ClientLines order class
 */
class OrderDataCollector extends ServiceOrderRedefiner
{
    /**
     * ClientLines constructor.
     *
     * @param ConfigRepository $configRepository
     * @param ProductMetadataInterface $productMetadata
     */
    public function __construct(
        ConfigRepository $configRepository,
        ProductMetadataInterface $productMetadata
    )
    {
        $this->configRepository = $configRepository;
        $this->productMetadata = $productMetadata;
    }
}


