<?php
namespace UltimateModel\Identification\Storage;

use YesPHP\ArrayObject;
use UltimateModel\Identification\UserNormal;
use UltimateModel\Identification\Storage\Iterator\UserNormalIterator;

class UserNormalStorage extends ArrayObject{

    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return UserNormalIterator
     */
    public function getIterator()
    {
        return new UserNormalIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  UserNormal[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

        /**
     * Set the value of storage
     *
     * @param  \TGDDFace\Model\UserNormal[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}