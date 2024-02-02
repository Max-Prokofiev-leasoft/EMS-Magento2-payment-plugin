<?php

namespace GingerPay\Payment\Strategies;

use GingerPay\Payment\StrategyInterfaces\GetTransactionStrategy;

class DefaultGetTransactionStrategy implements GetTransactionStrategy
{

    public function getTransactions($platformCode, $issuer_id = null, $verifiedTermsOfService = null)
    {
        return [
            array_filter([
                "payment_method"         => $platformCode,
                "payment_method_details" => array_filter(
                    [
                        "issuer_id" => $issuer_id,
                        "verified_terms_of_service" => $verifiedTermsOfService
                    ]
                )
            ])
        ];
    }
}
