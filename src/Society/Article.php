<?php
namespace UltimateModel\Society;
use UltimateModel\Identification\User;

class Article extends ArticleModel {

    const USEROWN = "userOwn";

    public function toArray(){
        return array_merge([
            self::USEROWN => $this->getUserOwn(),
        ],parent::toArray());
    }

    public static function propertySpecificity(){

        return self::CONTENT;
    }

    /**
     * 
     *
     * @var User
     */
    protected $userOwn;


    /**
     * Get the value of userOwn
     *
     * @return  User
     */ 
    public function getUserOwn()
    {
        return $this->userOwn;
    }

    /**
     * Set the value of userOwn
     *
     * @param  User  $userOwn
     *
     * @return  self
     */ 
    public function setUserOwn(User $userOwn)
    {
        $this->userOwn = $userOwn;

        return $this;
    }
}