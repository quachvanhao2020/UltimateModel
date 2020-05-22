<?php
namespace UltimateModel\Communication;

class Rating extends CommentModel
{

    const STAR = "star";
    /**
     * 
     *
     * @var int
     */
    protected $star = 5;

        /**
     * 
     *
     * @var bool
     */
    protected $isBuyer = false;

    public static function propertySpecificity(){

        return self::STAR;

    }

    /**
     * Get the value of star
     *
     * @return  int
     */ 
    public function getStar()
    {
        return $this->star;
    }

    /**
     * Set the value of star
     *
     * @param  int  $star
     *
     * @return  self
     */ 
    public function setStar(int $star)
    {
        $this->star = $star;

        return $this;
    }



    /**
     * Get the value of isBuyer
     *
     * @return  bool
     */ 
    public function getIsBuyer()
    {
        return $this->isBuyer;
    }

    /**
     * Set the value of isBuyer
     *
     * @param  bool  $isBuyer
     *
     * @return  self
     */ 
    public function setIsBuyer(bool $isBuyer)
    {
        $this->isBuyer = $isBuyer;

        return $this;
    }
}