<?php

namespace Yosmy\Phone;

interface AddUntypedCarrier
{
    /**
     * @param string $country
     * @param string $mcc
     * @param string $mnc
     * @param string $name
     */
    public function add(
        string $country,
        string $mcc,
        string $mnc,
        string $name
    );
}