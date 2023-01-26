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

echo '<br><b> 2. Разработать функцию, которая на вход принимает два числа: число, которое нужно возвести в степень
и число-степень до которого нужно возвести. Возвращает число, возведенное в степень. </b><br>'; 


function numDeg($number, $degree){
return $number ** $degree;
}

$number = random_int(1, 10);
$degree = random_int(1, 10);

?>

<div>
<h1><?= "$number ^ $degree = " . numDeg($number, $degree) ?></h1>
</div>

<p><a href="task3.php">Next</a></p>