<?php
namespace UltimateModel\Communication\Storage;

use YesPHP\ArrayObject;
use UltimateModel\Communication\Comment;
use UltimateModel\Communication\Storage\Iterator\CommentIterator;

class CommentStorage extends ArrayObject{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return CommentIterator
     */
    public function getIterator()
    {
        return new CommentIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  Comment[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

                /**
     * Set the value of storage
     *
     * @param  \UltimateModel\Model\Comment[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}