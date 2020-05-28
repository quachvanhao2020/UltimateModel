<?php
namespace UltimateModel\Filter\Traits;
use UltimateModel\Filter\EntityFilter;
use UltimateModel\Filter\Storage\EntityFilterStorage;

trait FilterTrait{

        /**
     * @var callable
     */

    protected $callableValue;

    /**
     * @var mixed
     */

    protected $filterTarget;

    /**
     * 
     *
     * @var EntityFilterStorage
     */
    protected $filters;


    /**
     * 
     *
     * @var EntityFilterStorage
     */
    protected $filterActives;

    public function __construct(){

        $this->setFilters(new EntityFilterStorage());
        $this->setFilterActives(new EntityFilterStorage());
    }

            /**
     * Get the value of filters
     */ 
    public function filter()
    {
        $value = $this->getFilterTarget();

        foreach ($this->getFilterActives() as $key => $filter) {
            
            $value = $filter->filter($value);

        }

        if(is_callable($this->getCallableValue())){

            $this->getCallableValue()($value);

        }
        
        return $this;
    }

    public function activeFilter($id){

        $this->getFilterActives()->clear();

        foreach ($this->getFilters() as $key => $value) {
            
            if($value->getId() == $id){

                array_push($this->filterActives,$value);

            }

        }

    }

    /**
     * Get the value of filterTarget
     */ 
    public function getFilterTarget()
    {
        return $this->filterTarget;
    }

    /**
     * Set the value of filterTarget
     *
     * @return  self
     */ 
    public function setFilterTarget(&$filterTarget)
    {
        $this->filterTarget = $filterTarget;

        return $this;
    }

    /**
     * Get the value of callableValue
     */ 
    public function getCallableValue()
    {
        return $this->callableValue;
    }

    /**
     * Set the value of callableValue
     *
     * @return  self
     */ 
    public function setCallableValue($callableValue)
    {
        $this->callableValue = $callableValue;

        return $this;
    }

    /**
     * Get the value of filters
     *
     * @return  EntityFilterStorage
     */ 
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * Set the value of filters
     *
     * @param  EntityFilterStorage  $filters
     *
     * @return  self
     */ 
    public function setFilters(EntityFilterStorage $filters)
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * Get the value of filterActives
     *
     * @return  EntityFilterStorage
     */ 
    public function getFilterActives()
    {
        return $this->filterActives;
    }

    /**
     * Set the value of filterActives
     *
     * @param  EntityFilterStorage  $filterActives
     *
     * @return  self
     */ 
    public function setFilterActives(EntityFilterStorage $filterActives)
    {
        $this->filterActives = $filterActives;

        return $this;
    }

}