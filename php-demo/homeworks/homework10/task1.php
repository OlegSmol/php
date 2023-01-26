<style>
    p {
        text-align: center;
        margin: 40px 0;
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
</style>

<?php

echo '<br><b> 1. Разработать функцию, которая на вход принимает count_elem (количество элементов в массиве), 
min_val (минимальное число, которое может быть записано в элементе массива), max_val (максимальное число, 
которое может быть записано в элементе массива) и возвращает массив c количеством элементов count_elem. 
Каждый элемент — это число, которое генерируется случайным значением от min_val до max_val 
(если min_val больше max_val, поменять их значения местами). </b><br>';

function newArr($count_elem, $min_val, $max_val)
{
    $newArr = [];

    if ($min_val > $max_val) {
        $max_val = $max_val + $min_val;
        $min_val = $max_val - $min_val;
        $max_val = $max_val - $min_val;
    }

    for ($i = 0; $i < $count_elem; $i++) {
        $newArr[$i] = rand($min_val, $max_val);
    }

    return '<h3>Count: '. $count_elem . '</h3><h3>Min: '. $min_val . '</h3>
    <h3>Max: '. $max_val . '</h3><h2>Output: ' . implode(', ', $newArr) . '</h2>';
}

$count_elem = random_int(5, 20);
$min_val = random_int(1, 20);
$max_val = random_int(1, 20);

?>

<div> <?= newArr($count_elem, $min_val, $max_val) ?> </div>

<p><a href="task2.php">Next</a></p>