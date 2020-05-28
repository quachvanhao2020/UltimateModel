<?php
namespace UltimateModel\ECommerce\Storage;

use YesPHP\ArrayObject;
use UltimateModel\ECommerce\Category;
use UltimateModel\ECommerce\Storage\Iterator\CategoryIterator;

class CategoryStorage extends ArrayObject{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return CategoryIterator
     */
    public function getIterator()
    {
        return new CategoryIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  Category[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

            /**
     * Set the value of storage
     *
     * @param  \TGDDFace\Model\Category[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}