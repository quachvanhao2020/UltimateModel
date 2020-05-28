<?php
namespace UltimateModel\Filter\Storage;

use YesPHP\ArrayObject;
use UltimateModel\Filter\EntityFilter;
use UltimateModel\Filter\Storage\Iterator\EntityFilterIterator;

class EntityFilterStorage extends ArrayObject{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return EntityFilterIterator
     */
    public function getIterator()
    {
        return new EntityFilterIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  EntityFilter[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

                    /**
     * Set the value of storage
     *
     * @param  \TGDDFace\Filter\EntityFilter[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}