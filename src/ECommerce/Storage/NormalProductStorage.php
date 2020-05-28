<?php
namespace UltimateModel\ECommerce\Storage;

use YesPHP\ArrayObject;
use UltimateModel\ECommerce\NormalProduct;
use UltimateModel\ECommerce\Storage\Iterator\NormalProductIterator;

class NormalProductStorage extends ArrayObject{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return NormalProductIterator
     */
    public function getIterator()
    {
        return new NormalProductIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  NormalProduct[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

                            /**
     * Set the value of storage
     *
     * @param  \TGDDFace\Model\NormalProduct[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}