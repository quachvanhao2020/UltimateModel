<?php
namespace UltimateModel;

use JsonSerializable;

class Entity implements JsonSerializable {
    
    const ID = "id";
    const HELPER = "helper";
    const __CLASS = "__class";

    public function jsonSerialize() {
        return [
            self::ID => $this->getId(),
            self::HELPER => $this->getHelper(),
            self::__CLASS => get_class($this), 
        ];
    }
    /**
     * 
     *
     * @var EntityHelperModel
     */
    protected $helper;

    public function __construct($id = null)
    {
        $this->setId($id);
    }

        /**
     * 
     *
     * @var string
     */
    protected $id;

    /**
     * Get the value of id
     *
     * @return  string
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  string  $id
     *
     * @return  self
     */ 
    public function setId(string $id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of helper
     *
     * @return  EntityHelperModel
     */ 
    public function getHelper()
    {
        return $this->helper;
    }

    /**
     * Set the value of helper
     *
     * @param  EntityHelperModel  $helper
     *
     * @return  self
     */ 
    public function setHelper($helper = null)
    {
        $helper && $helper->setEntity($this);

        $this->helper = $helper;

        return $this;
    }
}