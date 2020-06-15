<?php

namespace App\Model;

class ProductDB
{
    protected $database;

    public function __construct()
    {
        $dbconnect = new DBConnect();
        $this->database = $dbconnect->connect();
    }

    public function getProduct()
    {
        $sql = "SELECT * FROM  products";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $array = [];
        foreach ($result as $item) {
            $product = new Product($item['id'], $item['productCode'], $item['productName'], $item['productLine'], $item['productPrice'], $item['quantityInStock'], $item['dateCreate'], $item['productDescription']);
            array_push($array, $product);
        }
        return $array;
    }

    public function addProduct($product)
    {
        $sql = "INSERT INTO `products` (`id`, `productCode`, `productName`, `productLine`, `productPrice`, `quantityInStock`, `dateCreate`, `productDescription`) VALUES (:id, :productCode, :productName, :productLine, :productPrice, :quantityInStock, :dateCreate, :productDescription)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $product->getId());
        $stmt->bindParam(":productCode", $product->getProductCode());
        $stmt->bindParam(":productName", $product->getProductName());
        $stmt->bindParam(":productLine", $product->getProductLine());
        $stmt->bindParam(":productPrice", $product->getProductPrice());
        $stmt->bindParam(":quantityInStock", $product->getQuantity());
        $stmt->bindParam(":dateCreate", $product->getDateCreate());
        $stmt->bindParam(":productDescription", $product->getDescription());
        $stmt->execute();
    }

    public function getIdProduct($id)
    {
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $item = $stmt->fetch();
        $product = new Product($item['id'], $item['productCode'], $item['productName'], $item['productLine'], $item['productPrice'], $item['quantityInStock'], $item['dateCreate'], $item['productDescription']);
        return $product;
    }

    public function updateProduct($product)
    {
        $sql = "UPDATE `products` SET `id`= :id,`productCode`= :productCode,`productName`= :productName,`productLine`= :productLine,`productPrice`= :productPrice,`quantityInStock`= :quantityInStock,`dateCreate`= :dateCreate,`productDescription`= :productDescription WHERE id = :id ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $product->getId());
        $stmt->bindParam(":productCode", $product->getProductCode());
        $stmt->bindParam(":productName", $product->getProductName());
        $stmt->bindParam(":productLine", $product->getProductLine());
        $stmt->bindParam(":productPrice", $product->getProductPrice());
        $stmt->bindParam(":quantityInStock", $product->getQuantity());
        $stmt->bindParam(":dateCreate", $product->getDateCreate());
        $stmt->bindParam(":productDescription", $product->getDescription());
        $stmt->execute();
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

    public function searchProduct($key)
    {
        $sql = "SELECT * FROM products WHERE productName LIKE :keyword";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(":keyword", '%' . $key . '%');
        $stmt->execute();
        $result = $stmt->fetchAll();
        $array = [];
        foreach ($result as $item) {
            $product = new Product($item['id'], $item['productCode'], $item['productName'], $item['productLine'], $item['productPrice'], $item['quantityInStock'], $item['dateCreate'], $item['productDescription']);
            array_push($array, $product);
        }
        return $array;
    }
}