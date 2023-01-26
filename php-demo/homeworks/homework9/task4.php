<style>
    p {
        text-align: center;
    }

    a {
        width: 160px;
        display: block;
        margin: auto;
        padding: 10px;
        text-decoration: none;
        border: 2px solid black;
        border-radius: 10px;
        color: black;
    }

    a:hover {
        background-color: beige;
        transition: .5s;
        font-weight: 900;
    }

    .product {
        float: left;
        border: 2px solid green;
        text-align: center;
    }

    h3{
        padding: 5px;
    }

    img {
        height: 250px;
        margin-top: 10px;
    }

    .product>button {
        background-color: green;
        color: white;
        padding: 5px 30px;
        margin: 30px auto;
        display: block;
        cursor: pointer;
    }

    .product>button:hover {
        background-color: white;
        color: green;
        transition: .5s;
    }
</style>

<?php

echo '<br><b>. 4. Разработать функцию, которая на входе принимает name, image, price
и выводит информацию o продукте c кнопкой "Купить".</b><br>';

function infoSmart($smartphones)
{
    $info = '';
    foreach ($smartphones as $key => $value) {
        $info .= '<div class="product"> <img src="img/' . $value['image'] . '" alt=""> <h3>' . $value['name'] . '</h3> 
        <p>' . $value['price'] . ' руб.</p> <button type="sabmit" name="buy"> Купить </button></div>';
    }
    return $info;
}

$smartphones = array(
    'iphone'  => array('name' => 'Apple iPhone 14 Pro 128 ГБ', 'image' => 'iphone.jpg', 'price' => 95500),
    'samsung' => array('name' => 'Samsung Galaxy S22 Ultra 8/128 ГБ', 'image' => 'samsung.jpg', 'price' => 69500),
    'xiaomi'  => array('name' => 'Xiaomi 12 Pro 12/256 ГБ Global', 'image' => 'xiaomi.jpg', 'price' => 57600),
    'huawei'  => array('name' => 'HUAWEI P50 Pro 8/256 ГБ Global', 'image' => 'huawei.jpg', 'price' => 56000),
);

?>

<div style="overflow:hidden; padding: 20px;">
    <?= infoSmart($smartphones) ?>
</div>

<p style="margin: 40px 0;"><a href="task5.php">Next</a></p>