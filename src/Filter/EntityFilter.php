<?php
namespace UltimateModel\Filter;

use JsonSerializable;
use Laminas\Filter\FilterInterface;
use UltimateModel\Entity;

class EntityFilter extends Entity implements 
//FilterInterface,
JsonSerializable
{
    public function jsonSerialize() {
        return [
            self::ID => $this->getId(),
        ];
    }

    public function filter($items)
    {
        return $items;
    }
}