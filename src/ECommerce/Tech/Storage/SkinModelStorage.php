<?php
namespace UltimateModel\ECommerce\Tech\Storage;

use YesPHP\ArrayObject;
use UltimateModel\ECommerce\Tech\SkinModel;
use UltimateModel\ECommerce\Tech\Storage\Iterator\SkinModelIterator;

class SkinModelStorage extends ArrayObject{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return SkinModelIterator
     */
    public function getIterator()
    {
        return new SkinModelIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  SkinModel[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  \TGDDFace\Model\SkinModel[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}