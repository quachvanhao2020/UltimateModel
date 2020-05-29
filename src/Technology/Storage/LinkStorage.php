<?php
namespace UltimateModel\Technology\Storage;

use YesPHP\ArrayObject;
use UltimateModel\Technology\Storage\Iterator\LinkIterator;
use UltimateModel\Technology\Link;

class LinkStorage extends ArrayObject{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return LinkIterator
     */
    public function getIterator()
    {
        return new LinkIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  Link[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

        /**
     * Set the value of storage
     *
     * @param Link[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}