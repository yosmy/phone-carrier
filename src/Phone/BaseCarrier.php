<?php

namespace Yosmy\Phone;

use MongoDB\Model\BSONDocument;

class BaseCarrier extends BSONDocument implements Carrier
{
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->offsetGet('_id');
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->offsetGet('type');
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->offsetGet('country');
    }

    /**
     * @return string
     */
    public function getMcc(): string
    {
        return $this->offsetGet('mcc');
    }

    /**
     * @return string
     */
    public function getMnc(): string
    {
        return $this->offsetGet('mnc');
    }

    /**
     * @return string[]
     */
    public function getNames(): array
    {
        return $this->offsetGet('names');
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): object
    {
        $data = parent::jsonSerialize();

        $data->id = $data->_id;

        unset($data->_id);

        return $data;
    }
}