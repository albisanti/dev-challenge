<?php

namespace App\Service;

class CurrencyWebservice {

    /**
     * Return the value of a currency starting from the desiredCurrenct
     *
     * @param string $currency - The starting currenct
     * @param string $desiredCurrency - The currency we want
     * @return double
     */
    public static function getExchangeRate($currency,$desiredCurrency) {
        //The following array is a representation of a set of values returned
        //from an eventual API. The desiredCurrency has been passed to the fake API.
        //This class will show values that goes from 0.7 to 0.9 from USD and from 1.1 to 1.3 for GPB.
        $currencyValue =  [
            'EUR' => 1.00,
            'USD' => rand(7,9)/10,
            'GPB' => rand(11,13)/10
        ];
        return $currencyValue[$currency] ?? rand(7,13)/10;
    }
}