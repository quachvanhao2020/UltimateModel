<?php
namespace UltimateModel\Storage;

use YesPHP\ArrayObject;
use UltimateModel\Storage\Iterator\EntityIterator;
use UltimateModel\Entity;

class EntityStorage extends ArrayObject{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return EntityIterator
     */
    public function getIterator()
    {
        return new EntityIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  Entity[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

            /**
     * Set the value of storage
     *
     * @param  \UltimateModel\Model\Entity[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}