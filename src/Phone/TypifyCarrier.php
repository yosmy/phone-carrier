<?php

namespace Yosmy\Phone;

/**
 * @di\service()
 */
class TypifyCarrier
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
     * @param string $id
     * @param string $type
     */
    public function typify(
        string $id,
        string $type
    ) {
        $this->manageCollection->updateOne(
            [
                '_id' => $id
            ],
            [
                '$set' => [
                    'type' => $type
                ]
            ]
        );
    }
}