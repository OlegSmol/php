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

    div{
        margin: 0 auto;
    }
</style>

<?php

echo '<br><b> 4. Разработать функцию генерации случайного цвета, которая возвращает случайный цвет в HEX-формате,
вывести на страницу DIV, зарисованный цветом, который вернет функция.</b><br><br>';

function randomColor(){
    return sprintf("#%06X\n", mt_rand(0, 0xFFFFFF));
}

?>

<div style="background-color:<?= randomColor()?>; width:100px; height:100px;"></div>

<p><a href="task5.php">Next</a></p>