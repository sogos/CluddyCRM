<?php

namespace Cluddy\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseEmailAddress
 */
class BaseEmailAddress extends Shard
{
    /**
     * @var string
     */
    private $address;


    /**
     * Set address
     *
     * @param string $address
     * @return BaseEmailAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }
}