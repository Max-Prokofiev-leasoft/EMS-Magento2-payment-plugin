<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Payment\Model\Adminhtml\Source;

use Magento\Framework\Option\ArrayInterface;
use function GingerPay\Payment\Model\Adminhtml\Source\__;

/**
 * ApiKey source class
 */
class ApiKey implements ArrayInterface
{
    /**
     * Live/Test Key Array
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => 'live', 'label' => __('Live')],
            ['value' => 'test', 'label' => __('Test')]
        ];
    }
}
