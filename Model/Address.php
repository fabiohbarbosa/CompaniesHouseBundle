<?php

namespace Wearescytale\CompaniesHouseBundle\Model;

/**
 * Class Address
 */
class Address
{
    /**
     * @var string
     */
    private $addressLine1;

    /**
     * @var string
     */
    private $addressLine2;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $locality;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $premises;

    /**
     * @var string
     */
    private $careOf;

    /**
     * @var string
     */
    private $poBox;

    /**
     * @var string
     */
    private $region;

    /**
     * @return string
     */
    public function getFullAddress(): string
    {
        return sprintf(
            "%s%s%s, %s%s%s",
            $this->getPremises() ? $this->getPremises() . ' ' : '',
            $this->getAddressLine1() ?: '',
            $this->getAddressLine2() ? ', ' . $this->getAddressLine2() : '',
            $this->getLocality() ?: '',
            $this->getCountry() ? ', ' . $this->getCountry() : '',
            $this->getPostalCode() ? ' ' . $this->getPostalCode() : ''
        );
    }

    /**
     * @return string
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * @param string $addressLine1
     *
     * @return Address
     */
    public function setAddressLine1(string $addressLine1): Address
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * @param string $addressLine2
     *
     * @return Address
     */
    public function setAddressLine2(string $addressLine2): Address
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     *
     * @return Address
     */
    public function setPostalCode(string $postalCode): Address
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocality(): ?string
    {
        return $this->locality;
    }

    /**
     * @param string $locality
     *
     * @return Address
     */
    public function setLocality(string $locality): Address
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return Address
     */
    public function setCountry(string $country): Address
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getPremises()
    {
        return $this->premises;
    }

    /**
     * @param string $premises
     *
     * @return Address
     */
    public function setPremises($premises)
    {
        $this->premises = $premises;

        return $this;
    }

    /**
     * @return string
     */
    public function getCareOf(): ?string
    {
        return $this->careOf;
    }

    /**
     * @param string $careOf
     *
     * @return Address
     */
    public function setCareOf(string $careOf): Address
    {
        $this->careOf = $careOf;

        return $this;
    }

    /**
     * @return string
     */
    public function getPoBox(): ?string
    {
        return $this->poBox;
    }

    /**
     * @param string $poBox
     *
     * @return Address
     */
    public function setPoBox(string $poBox): Address
    {
        $this->poBox = $poBox;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string $region
     *
     * @return Address
     */
    public function setRegion(string $region): Address
    {
        $this->region = $region;

        return $this;
    }
}
