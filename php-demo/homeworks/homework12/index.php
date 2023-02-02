<style>
button{
    border: none;
    background-color:white;
}

.red{
    color: red;
}

</style>

<?php

include "./product.php";

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

    foreach ($products as $product) {
        echo '<h3>' . $product->getProduct() . '</h3>';
    }

    $_SESSION['product'] = $products;
}

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

?>

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
<hr>

<?php

// 3. B файле index.php сделайте массив категорий и форму, которая будет состоять из 
// текстового поля c названием и кнопки Add. По клику на кнопку будет создаваться
// категория и все продукты, которые будут на странице, будут туда добавляться, 
// a список продуктов будет очищаться.

?>

<h2>Categories</h2>
<form method="POST">
    <input type="text" name="nameCat" placeholder="Category" />
    <input type="submit" value="Add" />
</form>

<?php

if (isset($_SESSION['category'])) {
    $categories = $_SESSION['category'];
}

if (isset($_POST) && !empty($_POST["nameCat"]) && !empty($_SESSION['product'])) {
    $_list_products = $_SESSION['product'];
    $categories[] = new Category($_POST["nameCat"], $_list_products);
    unset($_SESSION['product']);

    foreach ($categories as $category) {
        echo '<h3>' . $category->getCategoryName() . '</h3>';
    }

    $_SESSION['category'] = $categories;
}

// unset($_SESSION['category']);

// 4. Добавьте метод поиска категории, который принимает список категорий и название, 
// которое необходимо найти, и возвращает объект категории.

function searchByNameCat($categories, $nameCat)
{
    // return array_filter($categories, fn($category) =>
    //     $category->nameCat === $nameCat);

        $searchCat = [];
        foreach ($categories as $category) {
            if ($category->nameCat === $nameCat) {
                $searchCat[] = $category;
            }
        }
        return $searchCat;
}

?>

<form method="POST">
    <input type="text" name="searchCat" placeholder="Search category" />
    <input type="submit" value="SearchCat" />
</form>

<?php

if (isset($_POST) && !empty($_POST["searchCat"])) {
    $items = searchByNameCat($categories, $_POST["searchCat"]);

    foreach ($items as $category) {
        echo '<h3>' . $category->getCategoryName() . '</h3>';
    }
}

// 4. Создайте список с названиями всех категорий. По клику на элемент списка должны выводиться продукты, 
// которые принадлежат к данной категории.

if (!empty($_SESSION['category'])) {

    echo '<form action="" method="POST"><ul>';
    foreach ($categories as $key => $value) {

        if (isset($_POST[$value->getCategoryName()])) {
            echo '<p><button name="' . $value->getCategoryName() . '" class="red">' . $value->getCategoryName() . '</button></p>';
        }
        else {
            echo '<p><button name="' . $value->getCategoryName() . '">' . $value->getCategoryName() . '</button></p>';
        }   
    }
    echo '</ul></form>';

    foreach ($categories as $key => $value) {
        if (isset($_POST[$value->getCategoryName()])) {
            echo  $value->getCategoryProducts();
        }
    }
}

?>