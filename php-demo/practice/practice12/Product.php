<?php

// 1. Создать класс Product с полями name, price, добавить к
// классу конструктор, который принимает 2 параметра
// (_name, _price) и заполняет соответствующие поля.

class Product
{
    public $name;
    public $price;

    function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }

    // 2. Создать метод getProduct(), который возвращает строку
    // вида (Name{name}; price{price})

    function getProduct()
    {
        return "$this->name: price $$this->price";
    }

}

?>