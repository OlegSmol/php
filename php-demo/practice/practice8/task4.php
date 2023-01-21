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

echo '<br> 4. Разработать функцию проверки числа на кратность другом числу (два числа являются
параметрами функции, default-значение второго числа — "2").<br>';

$num1 = random_int(10, 100);
$num2 = random_int(1, 9);

echo '<br>' . $num1 . '; ' . $num2;

function checkMulti(int $num1, int $num2 = 2): bool {
    return $num1 % $num2 === 0;
}
?>

<div>
<p><?= $num2 ?> <?= checkMulti($num1, $num2) ? "is" : "is not" ?> multiple for <?= $num1?></p>
</div>

<p><a href="task5.php">Next</a></p>