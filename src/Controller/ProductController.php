<?php

namespace App\Controller;

use App\Model\Product;
use App\Model\ProductDB;

class ProductController
{
    protected $connect;

    public function __construct()
    {
        $this->connect = new ProductDB();
    }

    public function viewProduct()
    {
        $products = $this->connect->getProduct();
        include "src/View/list.php";
    }

    public function addProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $products = $this->connect->getProduct();
            include "src/View/add.php";
        } else {
            $productID = $_POST['id'];
            $productCode = $_POST['productcode'];
            $productName = $_POST['productname'];
            $productLine = $_POST['productline'];
            $productPrice = $_POST['productprice'];
            $quantity = $_POST['quantity'];
            $dateCreate = $_POST['date'];
            $description = $_POST['description'];
            $product = new Product($productID, $productCode, $productName, $productLine, $productPrice, $quantity, $dateCreate, $description);
            $this->connect->addProduct($product);
            header("Location:index.php?page=view-product");
        }
    }

    public function updateProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['id'];
            $products = $this->connect->getProduct();
            $product = $this->connect->getIdProduct($id);
            include "src/View/edit.php";
        } else {
            $id = $_POST['id'];
            $productCode = $_POST['productcode'];
            $productName = $_POST['productname'];
            $productLine = $_POST['productline'];
            $productPrice = $_POST['productprice'];
            $quantity = $_POST['quantity'];
            $dateCreate = $_POST['date'];
            $description = $_POST['description'];
            $product = new Product($id, $productCode, $productName, $productLine, $productPrice, $quantity, $dateCreate, $description);
            $this->connect->updateProduct($product);
            header("Location:index.php?page=view-product");
        }
    }

    public function deleteProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['id'];
            $product = $this->connect->getIdProduct($id);
            include "src/View/delete.php";
        } else {
            $id = $_POST['id'];
            $this->connect->deleteProduct($id);
            header("Location:index.php?page=view-product");
        }
    }

    public function searchProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/View/search.php";
        } else {
            $search = $_REQUEST['search'];
            $products = $this->connect->searchProduct($search);
            include "src/View/search.php";
        }
    }
}