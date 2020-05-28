<?php
namespace UltimateModel\ECommerce\Tech;
use UltimateModel\Technology\Tech\TechEntity;
use UltimateModel\Technology\Storage\TechEntityStorage;

class PhoneParameterModel{

    /**
     * 
     *
     * @var TechEntityStorage
     */
    protected $techEntitys;

    /**
     * Get the value of techEntitys
     *
     * @return  TechEntityStorage
     */ 
    public function getTechEntitys()
    {
        if(empty($this->techEntitys)) $this->setTechEntitys(new TechEntityStorage());

        return $this->techEntitys;
    }

    /**
     * Set the value of techEntitys
     *
     * @param  TechEntityStorage  $techEntitys
     *
     * @return  self
     */ 
    public function setTechEntitys(TechEntityStorage $techEntitys = null)
    {
        $this->techEntitys = $techEntitys;

        return $this;
    }

}