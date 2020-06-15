<?php

namespace App\Model;
class Product
{
    protected $id;
    protected $productCode;
    protected $productName;
    protected $productLine;
    protected $productPrice;
    protected $quantity;
    protected $dateCreate;
    protected $description;

    public function __construct($id, $productCode, $productName, $productLine, $productPrice, $quantity, $dateCreat, $description)
    {
        $this->productCode = $productCode;
        $this->productName = $productName;
        $this->productLine = $productLine;
        $this->productPrice = $productPrice;
        $this->quantity = $quantity;
        $this->dateCreate = $dateCreat;
        $this->description = $description;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return mixed
     */
    public function getProductLine()
    {
        return $this->productLine;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return mixed
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

}