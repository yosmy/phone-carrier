<?php

namespace Yosmy\Phone;

/**
 * @di\service()
 */
class CollectCarriers
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
     * @return Carriers
     */
    public function collect(): Carriers
    {
        $cursor = $this->manageCollection->find(
            [],
            [
                'sort' => [
                    'type' => 1,
                    'country' => 1,
                    'mcc' => 1,
                    'mnc' => 1,
                ]
            ]
        );

        return new Carriers($cursor);
    }
}