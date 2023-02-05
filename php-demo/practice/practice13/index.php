<?php 
    include "product.php";

    // 6. В файле index.php создать 3 объекта класса Phone
    // и 2 объекта класса Monitor. Добавить их к массиву
    // products.

    $products = [
        new Phone("iPhone 7", "$1000", "Phone", "Apple", "A9", "1Gb", "1", "128Gb", "IOS"),
        new Phone("Galaxy S10", "$1000", "Phone", "Samsung", "Snapdragon 860", "3Gb", "1", "128Gb", "Android"),
        new Phone("Lumia 720", "$350", "Phone", "Nokia", "Snapdragon 300", "500Mb", "1", "32Gb", "Windown Phone"),
        new Monitor("S24E650", "$100", "Monitor", "Samsung", "model", "21'", "60Hz", "VGA, HDMI, DisplayPort"),
        new Monitor("Apple Sinema Display", "$10000", "Monitor", "Apple", "model", "24'", "144Hz", "HDMI, DisplayPort")
    ];

    // 7. Вывести массив продуктов на страницу, используя
    // метод getProduct().
    foreach($products as $product) {
        echo $product->getProduct();
    }

?>