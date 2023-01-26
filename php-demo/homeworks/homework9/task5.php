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

    h3 {
        padding: 5px;
    }

    img {
        height: 250px;
        margin-top: 10px;
    }
</style>

<?php
echo '<br><b> 5. Разработать функцию "корзина" . Ha входе функция принимает массив продуктов, 
которые пользователь добавил в корзину, ищет одинаковые товары, считает количество каждого
товара, считает price и возвращает массив продуктов пользователю (формат элемента
массива: name, image, count, total_price). </b><br>';

function basket($smartphones)
{
    $basket = [];

    for ($i = 0; $i < count($smartphones); $i++) {
        $counter = $smartphones[$i]['count'];

        for ($k = $i + 1; $k < count($smartphones); $k++) {
            if ($smartphones[$i]['name'] == $smartphones[$k]['name']) {
                $counter += $smartphones[$k]['count']; //счетчик количества
            }
        }
        $countPos = 0;
        foreach ($basket as $key => $value) {
           
            if ($smartphones[$i]['name'] == $value['name']) {
                $countPos += 1;  // исключение задвоения
            }
        }
        if ($countPos == 0) {
            $basket[] = array('name' => $smartphones[$i]['name'], 'image' => $smartphones[$i]['image'], 'count' => $counter, 'total_price' => ($counter * $smartphones[$i]['price']));
        }      
    }

    $result = '';

    foreach ($basket as $name => $item) {
        $result .= '<div class="product"> <img src="img/' . $item['image'] . '" alt=""> <h3>' . $item['name'] . '</h3> <p>' . $item['count'] . ' шт. </p>
        <p> Цена за все: ' . $item['total_price'] . ' p.</p> </div>';
    }
    return $result;
}

$smartphones = array(
    0 => array('name' => 'Apple iPhone 14 Pro 128 ГБ', 'image' => 'iphone.jpg', 'count' => 3, 'price' => 95500),
    1 => array('name' => 'Xiaomi 12 Pro 12/256 ГБ Global', 'image' => 'xiaomi.jpg', 'count' => 4, 'price' => 57600),
    2 => array('name' => 'Xiaomi 12 Pro 12/256 ГБ Global', 'image' => 'xiaomi.jpg', 'count' => 2, 'price' => 57600),
    3 => array('name' => 'Apple iPhone 14 Pro 128 ГБ', 'image' => 'iphone.jpg', 'count' => 1, 'price' => 95500),
    4 => array('name' => 'Xiaomi 12 Pro 12/256 ГБ Global', 'image' => 'xiaomi.jpg', 'count' => 1, 'price' => 57600),
);

?>

<div style="overflow:hidden; padding: 20px;">
    <?= basket($smartphones) ?>
</div>

<p><a href="index.php">Main page</a></p>