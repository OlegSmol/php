<?php
session_start();
class Product
{
    public $name;
    public $price;

    function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }

    function getProduct()
    {
        return "$this->name: price $$this->price";
    }
}

// 1. Разработайте класс Category, имеющий поля name и list_products. 
// Добавьте к классу конструктор c параметрами (_name, _list_products).

class Category
{
    public $nameCat;
    public $list_products;

    function __construct($_nameCat, $_list_products)
    {
        $this->nameCat = $_nameCat;
        $this->list_products = $_list_products;
    }

    // 2. Создайте метод getCategoryName(), который вернет название категории,
    // и метод getCategoryProducts(), который вернет список продуктов в категории.

    function getCategoryName()
    {
        return "{$this->nameCat}";
    }

    function getCategoryProducts()
    {
        $list = '';
        foreach ($this->list_products as $key => $value) {
            $list .= '<p>' . $value->name . ': $' . $value->price . '</p>';
        }
        return $list;
        // return "{$this->list_products}";
    }
}

?>