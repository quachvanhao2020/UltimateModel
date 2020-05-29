<?php
namespace UltimateModel\ECommerce\Storage;

use YesPHP\ArrayObject;
use UltimateModel\ECommerce\Banner;
use UltimateModel\ECommerce\Banners;
use UltimateModel\ECommerce\Storage\Iterator\BannerIterator;

class BannerStorage extends ArrayObject{

    public static function TGDDFace_Model_BannerModel_to(Banners $banners,$me = null){

        $me = $me ?: new BannerStorage();

        foreach ($banners->getImages()->getIterator() as $key => $value) {
            
            $banner = new Banner();

            $banner->setImage($value);

            $a = $banners->getLinks()[$key];

            $a && $banner->setLink($a);

            $me->append($banner);

        }

        return $me;

    }

            /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return BannerIterator
     */
    public function getIterator()
    {
        return new BannerIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  Banner[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

                    /**
     * Set the value of storage
     *
     * @param  \TGDDFace\Model\Banner[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}