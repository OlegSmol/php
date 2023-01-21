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

echo '<br> 2. Разработать функцию, которая на входе принимает число и цифру, которую надо
из числа удалить, и возвращает новое число, но уже без цифр, указанных во втором параметре. <br>'; 

$number = rand(1000000000, 9999999999);
$x = rand(0, 9);

function delNum($number, $x){
return str_replace($x, '', $number);
}
?>

<div>
<p><?= $number ?> without '<?= $x ?>' is: <?= delNum($number, $x) ?></p>
</div>

<p><a href="task3.php">Next</a></p>