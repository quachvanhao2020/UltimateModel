<?php
namespace UltimateModel\Technology\Media\Storage;

use YesPHP\ArrayObject;
use UltimateModel\Technology\Media\ImageModel;
use UltimateModel\Technology\Media\Storage\Iterator\ImageModelIterator;

class ImageModelStorage extends ArrayObject{

            /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return ImageModelIterator
     */
    public function getIterator()
    {
        return new ImageModelIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  ImageModel[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

                    /**
     * Set the value of storage
     *
     * @param  \TGDDFace\Model\ImageModel[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}