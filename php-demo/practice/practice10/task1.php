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

echo '<b> 1. Разработать функцию, которая на входе принимает число и степень округления, а на выходе возвращает
округленное число до степени. </b>';

function roundNum(float $num, int $perc): float {
    return round($num, $perc);
}

$num = pi();
$perc = random_int(1, 9);
$rounded = roundNum($num, $perc );
?>

<div>
    <p><?= "$num rounded to $perc = $rounded"?></p>
</div>

<p><a href="task2.php">Next</a></p>