<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Payment\Model;

use Payment\Model\PaymentLibrary;
use Payment\Redefiners\Model\ModelBuilderRedefiner;
use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\Escaper;
use Magento\Payment\Helper\Data as PaymentHelper;
use Payment\Redefiners\Model\PaymentLibraryRedefiner as PaymentLibraryModel;
use Payment\Api\Config\RepositoryInterface as ConfigRepository;
use Magento\Payment\Model\MethodInterface;

/**
 * PaymentConfigProvider model class
 */
class PaymentConfigProvider extends ModelBuilderRedefiner
{
    /**
     * @var array
     */
    protected $methodCodes = [
        \Payment\Model\Methods\Bancontact::METHOD_CODE,
        \Payment\Model\Methods\Banktransfer::METHOD_CODE,
        \Payment\Model\Methods\Creditcard::METHOD_CODE,
        \Payment\Model\Methods\ApplePay::METHOD_CODE,
        \Payment\Model\Methods\Ideal::METHOD_CODE,
        \Payment\Model\Methods\KlarnaPayNow::METHOD_CODE,
        \Payment\Model\Methods\KlarnaPayLater::METHOD_CODE,
        \Payment\Model\Methods\Paypal::METHOD_CODE,
        \Payment\Model\Methods\Payconiq::METHOD_CODE,
        \Payment\Model\Methods\Afterpay::METHOD_CODE,
        \Payment\Model\Methods\Amex::METHOD_CODE,
        \Payment\Model\Methods\Googlepay::METHOD_CODE,
        \Payment\Model\Methods\GiroPay::METHOD_CODE,
        \Payment\Model\Methods\MobilePay::METHOD_CODE,
        \Payment\Model\Methods\Swish::METHOD_CODE,
    ];

    /**
     * PaymentConfigProvider constructor.
     *
     * @param PaymentLibrary              $paymentLibraryModel
     * @param ConfigRepository $configRepository
     * @param PaymentHelper    $paymentHelper
     * @param Escaper          $escaper
     */
    public function __construct(
        PaymentLibraryModel         $paymentLibraryModel,
        ConfigRepository $configRepository,
        PaymentHelper    $paymentHelper,
        Escaper          $escaper
    ) {
        $this->paymentLibraryModel = $paymentLibraryModel;
        $this->configRepository = $configRepository;
        $this->escaper = $escaper;
        $this->paymentHelper = $paymentHelper;
        foreach ($this->methodCodes as $code) {
            $this->methods[$code] = $this->getMethodInstance($code);
        }
    }


}
