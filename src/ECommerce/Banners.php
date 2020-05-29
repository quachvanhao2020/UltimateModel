<?php
namespace UltimateModel\ECommerce;

use UltimateModel\Entity;
use UltimateModel\Technology\Media\Storage\ImageModelStorage;
use UltimateModel\Technology\Storage\LinkStorage;

class Banners extends Entity{

    /**
     * 
     *
     * @var ImageModelStorage
     */
    protected $images;

        /**
     * 
     *
     * @var LinkStorage
     */
    protected $links;

    /**
     * Get the value of images
     *
     * @return  ImageModelStorage
     */ 
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set the value of images
     *
     * @param  ImageModelStorage  $images
     *
     * @return  self
     */ 
    public function setImages(ImageModelStorage $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get the value of links
     *
     * @return  LinkStorage
     */ 
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set the value of links
     *
     * @param  LinkStorage  $links
     *
     * @return  self
     */ 
    public function setLinks(LinkStorage $links)
    {
        $this->links = $links;

        return $this;
    }
}