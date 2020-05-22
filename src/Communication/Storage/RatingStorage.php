<?php
namespace UltimateModel\Communication\Storage;

use YesPHP\ArrayObject;
use UltimateModel\Communication\Rating;
use UltimateModel\Communication\Storage\Iterator\RatingIterator;

class RatingStorage extends ArrayObject{

    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return RatingIterator
     */
    public function getIterator()
    {
        return new RatingIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  Rating[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

        /**
     * Set the value of storage
     *
     * @param  \UltimateModel\Model\Rating[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}