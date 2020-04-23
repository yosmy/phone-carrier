<?php

namespace Yosmy\Phone;

interface PickCarrier
{
    /**
     * @param string $country
     * @param string $mcc
     * @param string $mnc
     *
     * @return Carrier
     *
     * @throws NonexistentCarrierException
     */
    public function pick(
        string $country,
        string $mcc,
        string $mnc
    ): Carrier;
}