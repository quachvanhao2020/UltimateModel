<?php
namespace TGDDFace\Model;

use UltimateModel\Entity;
use UltimateModel\ECommerce\Category;
use UltimateModel\ECommerce\Storage\ProductStorage;
use UltimateModel\Filter\FilterGroup;
use UltimateModel\ECommerce\Storage\CategoryStorage;

class CategoryNormal extends Entity
{

    const PRODUCTS = "products";
    const FILTERPRODUCTS = "filterProducts";

    public function jsonSerialize() {
        return [
            self::PRODUCTS => $this->getProducts(),
            self::FILTERPRODUCTS => $this->getFilterProducts(),
        ];
    }

    /**
     * 
     *
     * @var Category
     */
    protected $category;

    public function __construct($id = null,Category $category = null)
    {
        $this->id = $id;
        $this->category = $category;
    }

        /**
     * 
     *
     * @var ProductStorage
     */
    protected $productNeighbors;

            /**
     * 
     *
     * @var CategoryStorage
     */
    protected $categoryNeighbors;
    /**
     * 
     *
     * @var ProductStorage
     */
    protected $products;

        /**
     * 
     *
     * @var FilterGroup
     */
    protected $filterProducts;

    /**
     * Get the value of products
     *
     * @return  ProductStorage
     */ 
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @param  ProductStorage  $products
     *
     * @return  self
     */ 
    public function setProducts(ProductStorage $products)
    {
        $this->products = $products;
        return $this;
    }

    /**
     * Get the value of filterProducts
     *
     * @return  FilterGroup
     */ 
    public function getFilterProducts()
    {
        return $this->filterProducts;
    }

    /**
     * Set the value of filterProducts
     *
     * @param  FilterGroup  $filterProducts
     *
     * @return  self
     */ 
    public function setFilterProducts(FilterGroup $filterProducts)
    {
        $filterProducts->setFilterTarget($this->products);
        $filterProducts->setCallableValue([$this,"setProducts"]);

        $this->filterProducts = $filterProducts;

        return $this;
    }

    /**
     * Get the value of category
     *
     * @return  Category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @param  Category  $category
     *
     * @return  self
     */ 
    public function setCategory(Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of productNeighbors
     *
     * @return  ProductStorage
     */ 
    public function getProductNeighbors()
    {
        return $this->productNeighbors;
    }

    /**
     * Set the value of productNeighbors
     *
     * @param  ProductStorage  $productNeighbors
     *
     * @return  self
     */ 
    public function setProductNeighbors(ProductStorage $productNeighbors)
    {
        $this->productNeighbors = $productNeighbors;

        return $this;
    }

    /**
     * Get the value of categoryNeighbors
     *
     * @return  CategoryStorage
     */ 
    public function getCategoryNeighbors()
    {
        return $this->categoryNeighbors;
    }

    /**
     * Set the value of categoryNeighbors
     *
     * @param  CategoryStorage  $categoryNeighbors
     *
     * @return  self
     */ 
    public function setCategoryNeighbors(CategoryStorage $categoryNeighbors)
    {
        $this->categoryNeighbors = $categoryNeighbors;

        return $this;
    }
}