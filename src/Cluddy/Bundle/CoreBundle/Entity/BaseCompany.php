<?php

namespace Cluddy\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseCompany
 */
class BaseCompany extends Shard
{
    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $industry;


    /**
     * Set city
     *
     * @param string $city
     * @return BaseCompany
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
     * Set industry
     *
     * @param string $industry
     * @return BaseCompany
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;
    
        return $this;
    }

    /**
     * Get industry
     *
     * @return string 
     */
    public function getIndustry()
    {
        return $this->industry;
    }
}