<?php

namespace Yosmy\Phone;

/**
 * @di\service()
 */
class BasePickCarrier implements PickCarrier
{
    /**
     * @var ManageCarrierCollection
     */
    private $manageCollection;

    /**
     * @param ManageCarrierCollection $manageCollection
     */
    public function __construct(
        ManageCarrierCollection $manageCollection
    ) {
        $this->manageCollection = $manageCollection;
    }

    /**
     * {@inheritDoc}
     */
    public function pick(
        string $country,
        string $mcc,
        string $mnc
    ): Carrier {
        /** @var Carrier $carrier */
        $carrier = $this->manageCollection->findOne([
            'country' => $country,
            'mcc' => $mcc,
            'mnc' => $mnc,
        ]);

        if (!$carrier) {
            throw new BaseNonexistentCarrierException();
        }

        return $carrier;
    }
}