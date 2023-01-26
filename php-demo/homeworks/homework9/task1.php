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

echo '<br> <b> 1. Разработать функцию, которая принимает на входе массив, 
ищет в нем отрицательные числа, выводит массив на страницу и меняет цвет отрицательных
чисел на красный. Функция возвращает true в случае успешного выполнения или false
при ошибке. </b><br>';

function negative($arr)
{
    $newArr = [];
    foreach ($arr as $key => $value) {
        if ($value >= 0) {
            $newArr[] = $value;
        } else {
            $newArr[] = '<span style="color: red;">' . $value . '</span>';
        }
    }
    return '<h1> Array: ' . implode(', ', $newArr) . '</h1>';
}

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = rand(-10, 10);
}

echo negative($arr);

?>

<p><a href="task2.php">Next</a></p>