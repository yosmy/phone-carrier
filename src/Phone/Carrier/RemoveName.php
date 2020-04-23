<?php

namespace Yosmy\Phone\Carrier;

use Yosmy\Phone\ManageCarrierCollection;

/**
 * @di\service()
 */
class RemoveName
{
    /**
     * @var ManageCarrierCollection
     */
    private $manageCollection;

    /**
     * @param string $id
     * @param string $name
     */
    public function remove(
        string $id,
        string $name
    ) {
        $this->manageCollection->updateOne(
            [
                '_id' => $id
            ],
            [
                '$pull' => [
                    'names' => $name
                ]
            ]
        );
    }
}