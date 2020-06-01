<?php
namespace UltimateModel\Identification\Storage;

use YesPHP\ArrayObject;
use UltimateModel\Identification\User;
use UltimateModel\Identification\Storage\Iterator\UserIterator;

class UserStorage extends ArrayObject{

    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return UserIterator
     */
    public function getIterator()
    {
        return new UserIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  User[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

            /**
     * Set the value of storage
     *
     * @param  \TGDDFace\Model\User[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}