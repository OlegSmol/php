<?php
// 1. Сделать класс Product с такими полями: name, price,
// description, brand.
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

    // 4. В классе Product описать метод getProduct().
    abstract function getProduct();
}

// 2. Сделать класс Phone производным от класса Product
// с полями cpu, ram, countSim, hdd, os.
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

    // 5. В классах Phone и Monitor реализовать метод getProduct(),
    // который не принимает параметров и возвращает строку
    // с полей класса и конструкторы которой создают про-
    // дукт. Параметры конструктора в классе Phone: name,
    // description, brand, cpu, ram, countSim, hdd, os. Параме-
    // тры конструктора в классе Monitor: name, description,
    // brand, model, diagonal, frequency, ports.
    function getProduct()
    {
        return "<h2> Name: {$this->name}, Price: {$this->price}, Description: {$this->description}, Brand: {$this->brand}, 
                CPU: {$this->cpu}, RAM: {$this->ram}, Count SIM: {$this->countSim}, HDD: {$this->hdd}, OS: {$this->os} </h2>";
    }
}

//  3. Сделать класс Monitor производным от класса Product
// с полями diagonal, frequency, ports.

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
        return "<h2>Name: {$this->name}, Price: {$this->price}, Description: {$this->description}, Brand: {$this->brand}, 
            Diagonal: {$this->diagonal}, Frequency: {$this->frequency}, Ports: {$this->ports} </h2>";
    }
}
?>