<?php
namespace UltimateModel\Identification;

use JsonSerializable;

class User extends UserModel implements JsonSerializable {

    const NAME = "name";
    const ISQTV = "isQTV";
    const ISBUYER = "isBuyer";
    const EMAIL = "email";
    const PHONE = "phone";

    public function jsonSerialize() {
        return array_merge([
            self::NAME => $this->getName(),
            self::ISBUYER => $this->getIsBuyer(),
            self::ISQTV => $this->getIsQTV(),
            self::EMAIL => $this->getEmail(),
            self::PHONE => $this->getPhone(),
        ],parent::jsonSerialize());
    }

        /**
     * 
     *
     * @var string
     */
    protected $email = "";

            /**
     * 
     *
     * @var string
     */
    protected $phone = "";

    /**
     * 
     *
     * @var bool
     */
    protected $isQTV = false;

        /**
     * 
     *
     * @var bool
     */
    protected $isBuyer = true;
    
    /**
     * Get the value of isQTV
     *
     * @return  bool
     */ 
    public function getIsQTV()
    {
        return $this->isQTV;
    }

    /**
     * Set the value of isQTV
     *
     * @param  bool  $isQTV
     *
     * @return  self
     */ 
    public function setIsQTV(bool $isQTV)
    {
        $this->isQTV = $isQTV;

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

    /**
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of phone
     *
     * @param  string  $phone
     *
     * @return  self
     */ 
    public function setPhone(string $phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of phone
     *
     * @return  string
     */ 
    public function getPhone()
    {
        return $this->phone;
    }
}