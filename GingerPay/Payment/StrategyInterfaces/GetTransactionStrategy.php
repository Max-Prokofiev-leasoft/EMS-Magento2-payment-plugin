<?php

namespace GingerPay\Payment\StrategyInterfaces;

interface GetTransactionStrategy extends BaseStrategy
{
    public function getTransactions($platformCode, $issuer_id = null, $verifiedTermsOfService = null);

}
