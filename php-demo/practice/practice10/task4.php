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

echo '<br><b> 4. Разработать функцию, которая на входе принимает массив,
a возвращает среднее значение элементов массива.</b><br><br>';

function average($arr){
    return array_sum($arr) / count($arr);
}

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = rand(10, 100);
}

echo '<h1> Array: ' . implode(',', $arr) . '</h1>';
echo '<h3> AVG: ' . average($arr) . '</h3>';

?>

<p><a href="task5.php">Next</a></p>