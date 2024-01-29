<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Payment\Model\Methods;

use Payment\Redefiners\Model\PaymentLibraryRedefiner;

/**
 * General method class
 */
class General extends PaymentLibraryRedefiner
{

    /** Payment Code */
    const METHOD_CODE = 'ginger_methods_general';

    /**
     * @var string
     */
    protected $_code = self::METHOD_CODE;
}
