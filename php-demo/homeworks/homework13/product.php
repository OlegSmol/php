<?php

session_start();

abstract class Product
{
    public $name;
    public $price;
    public $description;
    public $brand;
    public function __construct($name, $price, $description, $brand)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->brand = $brand;
    }
    abstract function getProduct();
}

class Phone extends Product
{
    public $name;
    public $price;
    public $description;
    public $brand;
    public $cpu;
    public $ram;
    public $countSim;
    public $hdd;
    public $os;
    function __construct($name, $price, $description, $brand, $cpu, $ram, $countSim, $hdd, $os)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->brand = $brand;
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->countSim = $countSim;
        $this->hdd = $hdd;
        $this->os = $os;
        parent::__construct($name, $price, $description, $brand);
    }

    function getProduct()
    {
        return "<h2> Name: {$this->name}, Price: $ {$this->price}, Description: {$this->description}, Brand: {$this->brand}, 
                CPU: {$this->cpu}, RAM: {$this->ram} Mb, Count SIM: {$this->countSim}, HDD: {$this->hdd} Gb, OS: {$this->os} </h2>";
    }
    function getDescription(){
        return $this->description;
    }
}

class Monitor extends Product
{
    // новый варриант:
    // function __construct(
    //     public $name, public $description, public $brand,
    //     public $model, public $diagonal, public $frequency, public $ports
    // ) {
    //     parent::__construct($name, $description, $brand);
    // }
    //старый вариант:
    public $name;
    public $price;
    public $description;
    public $brand;
    public $model;
    public $diagonal;
    public $frequency;
    public $ports;

    function __construct($name, $price, $description, $brand, $model, $diagonal, $frequency, $ports)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->brand = $brand;
        $this->model = $model;
        $this->diagonal = $diagonal;
        $this->frequency = $frequency;
        $this->ports = $ports;
        parent::__construct($name, $price, $description, $brand);
    }

    function getProduct()
    {
        return "<h2>Name: {$this->name}, Price: $ {$this->price}, Description: {$this->description}, Brand: {$this->brand}, 
            Diagonal: {$this->diagonal} ', Frequency: {$this->frequency} Hz, Ports: {$this->ports} </h2>";
    }
    function getDescription(){
        return $this->description;
    }
}

// 1. Разработать класс Category с полями name filters и listProducts. Добавить к классу конструктор c 
// параметрами (_name, _filters), в котором к массиву filters добавить ("Price").

abstract class Category
{
    public $name;
    public $filters;
    public $price;
    public $listProducts;
    public function __construct($name, $filters, $listProducts)
    {
        $this->name = $name;
        $this->filters = $filters;
        $this->price = $filters['price'];
        $this->listProducts = $listProducts;
    }
}

// 2. Сделать класс PhoneCategory производным от класса Category. Описать в нем конструктор, в котором 
// добавить к массиву filters базового класса поля, необходимые для Phone ("Ram", "CountSim", "Hdd", "OS").

class PhoneCategory extends Category
{
    public $name;
    public $filters;
    public $price;
    public $ram;
    public $countSim;
    public $hdd;
    public $os;
    public $listProducts;
    function __construct($name, $filters, $listProducts)
    {
        $this->name = $name;
        $this->filters = $filters;
        $this->price = $filters['price'];
        $this->ram = $filters['ram'];
        $this->countSim = $filters['countSim'];
        $this->hdd = $filters['hdd'];
        $this->os = $filters['os'];
        $this->listProducts = $listProducts;
        parent::__construct($name, $filters, $listProducts);
    }
}

// 3. Сделать класс MonitorCategory производным от класса Category. Описать в нем конструктор, в котором
// добавить к массиву filters базового класса поля, необходимые для Monitor ("Diagonal ", "Frequency").

class MonitorCategory extends Category
{
    public $name;
    public $filters;
    public $price;
    public $listProducts;
    public $diagonal;
    public $frequency;

    function __construct($name,  $filters, $listProducts)
    {
        $this->name = $name;
        $this->filters = $filters;
        $this->price = $filters['price'];
        $this->diagonal = $filters['diagonal'];
        $this->frequency = $filters['frequency'];
        $this->listProducts = $listProducts;
        parent::__construct($name, $filters, $listProducts);
    }
}

?>