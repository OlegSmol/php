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

echo '<b> 2. Разработать функцию, которая на входе принимает ссылки на массив и заполняет eгo случайными
числами от 10 до 100 . функция возвращает true, если все сработало корректно или false, если где-то произошла
ошибка. </b><br><br>';

   function genArr (&$arr) {
       $arr = array_map(function($el) {
            return random_int(10, 100);
        }, $arr);
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
    printArr($arr);

?>

<p><a href="task3.php">Next</a></p>