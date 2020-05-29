<?php
namespace UltimateModel\ECommerce;
use UltimateModel\Entity;
use UltimateModel\Technology\Media\ImageModel;
use UltimateModel\Technology\Link;

class Banner extends Entity{

        /**
     * 
     *
     * @var ImageModel
     */
    protected $image;

        /**
     * 
     *
     * @var Link
     */
    protected $link;


    /**
     * Get the value of image
     *
     * @return  ImageModel
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param  ImageModel  $image
     *
     * @return  self
     */ 
    public function setImage(ImageModel $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of link
     *
     * @return  Link
     */ 
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @param  Link  $link
     *
     * @return  self
     */ 
    public function setLink(Link $link)
    {
        $this->link = $link;

        return $this;
    }
}