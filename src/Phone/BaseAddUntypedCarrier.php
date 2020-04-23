<?php

namespace Yosmy\Phone;

/**
 * @di\service()
 */
class BaseAddUntypedCarrier implements AddUntypedCarrier
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
    public function add(
        string $country,
        string $mcc,
        string $mnc,
        string $name
    ) {
        /** @var Carrier $carrier */
        $carrier = $this->manageCollection->findOne([
            'country' => $country,
            'mcc' => $mcc,
            'mnc' => $mnc,
        ]);

        if (!$carrier) {
            $this->manageCollection->insertOne([
                '_id' => uniqid(),
                'type' => null,
                'country' => $country,
                'mcc' => $mcc,
                'mnc' => $mnc,
                'names' => [$name]
            ]);
        } else {
            $this->manageCollection->updateOne(
                [
                    '_id' => $carrier->getId()
                ],
                [
                    '$addToSet' => [
                        'names' => $name
                    ]
                ]
            );
        }
    }
}