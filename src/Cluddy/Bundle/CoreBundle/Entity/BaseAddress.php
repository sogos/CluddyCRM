<?php

namespace Cluddy\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseAddress
 */
class BaseAddress extends Shard
{
    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $postalcode;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $number;


    /**
     * Set city
     *
     * @param string $city
     * @return BaseAddress
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set postalcode
     *
     * @param string $postalcode
     * @return BaseAddress
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;
    
        return $this;
    }

    /**
     * Get postalcode
     *
     * @return string 
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return BaseAddress
     */
    public function setStreet($street)
    {
        $this->street = $street;
    
        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return BaseAddress
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }
}