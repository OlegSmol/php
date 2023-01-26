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

echo '<b> 3. Разработать функцию сортировки массива (на входе принимает ссылки на массив и число 0, если сортировать
по убыванию или 1, если сортировать по возрастанию) и возвращает "true" в случае успешного выполнения или
"false" при ошибке. </b><br><br>';

function genArr (&$arr) {
    $arr = array_map(function($el) {
         return random_int(10, 100);
     }, $arr);
    return true;
 }

function sortArr(&$arr, $dir = 0) {
    $func = $dir ? 'sort' : 'rsort';
    $func($arr);
    return true;
}

function printArr($arr) {
    array_walk($arr, function ($el, $i) {
        echo "$el, ";
        if(($i+1) % 5 === 0) echo "<br>";
    });
}

$arr = range(1, 25);
genArr($arr);
sortArr($arr);
printArr($arr);

?>

<p><a href="task4.php">Next</a></p>