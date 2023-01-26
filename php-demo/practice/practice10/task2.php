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

echo '<b> 2. Разработать функцию, которая на входе принимает дату и число дней, a на
выходе возвращает дату, которая наступит через указанное количество дней. </b>';

function reverse(int $timestamp, int $days): int {
    return $timestamp + $days * 24 * 60 * 60;
}

$timestamp = time();
$days = random_int(1, 365);
?>

<div>
    <p>
        <?= date('m/d/Y', $timestamp) .
            " + {$days}d = ". 
            date('m/d/Y', reverse($timestamp, $days))
        ?>
    </p>
</div>

<p><a href="task3.php">Next</a></p>