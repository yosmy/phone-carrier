<?php

namespace Yosmy\Phone;

use Yosmy\Mongo;

class Carriers extends Mongo\Collection
{
    /**
     * @var Carrier[]
     */
    protected $cursor;
}
