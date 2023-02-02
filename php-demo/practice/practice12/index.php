<?php

// 3. B файле index.php создать массив объектов класса Product и форму, которая состоит
// из двух текстовых полей и кнопки Add. По клику на кнопку Add в массив добавляется 
// новый объект co значениями, которые написаны в форме.

include "./Product.php";

?>

<h2>Products</h2>
<form method="POST">
    <input type="text" placeholder="Name product" name="name" />
    <input type="number" placeholder="Price" name="price" />
    <input type="submit" value="Add" />
</form>

<?php

session_start();

if (isset($_SESSION['product'])) {
    $products = $_SESSION['product'];
}

if (!empty($_POST["name"]) && !empty($_POST["price"])) {

    $product = new Product($_POST["name"], $_POST["price"]);
    $products[] = $product;

// 4. Вывести массив продуктов на страницу, используя метод getProduct().

    foreach ($products as $product) {
        echo '<h3>' . $product->getProduct() . '</h3>';
    }

    $_SESSION['product'] = $products;
}

// 5. Создать метод searchByName(), который принимает 2 параметра (массив объектов класса Product
// и название продукта), ищет по названию продукт в массиве и возвращает его.

function searchByName($products, $name)
{
    // return array_filter($products, fn($product) =>
    //     $product->name === $name);

    $searchProduct = [];
    foreach ($products as $product) {
        if ($product->name === $name) {
            $searchProduct[] = $product;
        }
    }
    return $searchProduct;
}

// 6. Создать форму для поиска, которая состоит из текстового поля и кнопки. По клике на кнопку 
// вызывать метод searchByName() и вывести найденный продукт на страницу.

?>
<hr>

<form method="POST">
    <input type="text" name="search" placeholder="Search product" />
    <input type="submit" value="Search" />
</form>

<?php

if (isset($_POST) && !empty($_POST["search"])) {
    $items = searchByName($products, $_POST["search"]);

    foreach ($items as $product) {
        echo '<h3>' . $product->getProduct() . '</h3>';
    }
}

?>