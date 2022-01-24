<?php

namespace App\Service;

class CurrencyConverter {

    private $currWS;

    public function __construct(CurrencyWebservice $currWS)
    {
        $this->currWS = $currWS;
    }

    /**
     * Calculate the exchange between 2 currencies
     *
     * @param double $value - The starting value
     * @param string $currency - The starting currency
     * @param string $desiredCurrency - The currency we want
     * @return double
     */
    public function calculate($value, $currency, $desiredCurrency="EUR"){
        if(is_double($value)) {
            $currencyValue = $this->currWS::getExchangeRate($currency,$desiredCurrency);
            if(is_double($currencyValue)) return $value*$currencyValue;
        }
        throw new \Exception("Incorrect value. Given ".gettype($value).". Expecting float.");
    }
}