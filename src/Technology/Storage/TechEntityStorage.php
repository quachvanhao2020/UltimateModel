<?php
namespace UltimateModel\Technology\Storage;

use YesPHP\ArrayObject;
use UltimateModel\Technology\Storage\Iterator\TechEntityIterator;
use UltimateModel\Technology\TechEntity;

class TechEntityStorage extends ArrayObject{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return TechEntityIterator
     */
    public function getIterator()
    {
        return new TechEntityIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  TechEntity[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

        /**
     * Set the value of storage
     *
     * @param  \TGDDFace\Model\Tech\TechEntity[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}