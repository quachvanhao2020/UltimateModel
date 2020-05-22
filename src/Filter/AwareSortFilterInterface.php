<?php
namespace UltimateModel\Filter;

interface AwareSortFilterInterface{

    public function getWeight($flag = SortFilter::MOST);

}