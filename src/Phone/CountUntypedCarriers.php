<?php

namespace Yosmy\Phone;

/**
 * @di\service()
 */
class CountUntypedCarriers
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
     * @return int
     */
    public function count(): int
    {
        return $this->manageCollection->count(
            [
                'type' => null
            ],
            [
                'sort' => [
                    'country' => 1,
                ]
            ]
        );
    }
}