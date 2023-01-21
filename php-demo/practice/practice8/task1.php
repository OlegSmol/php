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

    a:hover{
        background-color: beige;
        transition: .5s;
        font-weight: 900;
    }
</style>

<?php

echo '<br> 1. Разработать функции, которые на входе принимают два числа и возвращают:<br>
a. Большее из двух; <br>
b. Возводит первое число в степень второго числа; <br>
c. Находит среднее арифметическое двух чисел. <br>';

$a = random_int(1, 100);
$b = random_int(1, 100);

function maxNumber($a, $b) {
    return max($a, $b);
}

function degree($num, $exp){
    return $num ** $exp;
}

function average($a, $b){
    return ($a + $b)/2;
}
?>

<div>
<p>Number1: <?= $a?> ; Number2: <?= $b?> </p>
<p>Max: <?= maxNumber($a, $b)?></p>
<p>Pow: <?= degree($a, $b)?></p>
<p>Avg: <?= average($a, $b)?></p>
</div>

<p><a href="task2.php">Next</a></p>