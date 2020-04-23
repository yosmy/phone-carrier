<?php

namespace Yosmy\Phone;

use Yosmy\Mongo;

class BaseManageCarrierCollection extends Mongo\BaseManageCollection
{
    /**
     * @param string $uri
     * @param string $db
     * @param string $collection
     * @param string $root
     */
    public function __construct(
        string $uri,
        string $db,
        string $collection,
        string $root
    ) {
        parent::__construct(
            $uri,
            $db,
            $collection,
            [
                'typeMap' => array(
                    'root' => $root
                ),
            ]
        );
    }
}
