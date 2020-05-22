<?php
namespace UltimateModel\Identification;
use UltimateModel\Entity;

class UserModel extends Entity{

        /**
     * 
     *
     * @var string
     */
    protected $name;
    

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}