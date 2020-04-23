<?php

namespace Yosmy\Phone;

interface Carrier
{
    const TYPE_MOBILE = "mobile";
    const TYPE_VOIP = "voip";

    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return string|null
     */
    public function getType(): ?string;

    /**
     * @return string
     */
    public function getCountry(): string;

    /**
     * @return string
     */
    public function getMcc(): string;

    /**
     * @return string
     */
    public function getMnc(): string;

    /**
     * @return string[]
     */
    public function getNames(): array;
}