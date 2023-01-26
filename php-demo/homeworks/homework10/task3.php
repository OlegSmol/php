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
echo '<br><b> 3. Разработать функцию, которая на вход принимает ссылки на два числа и меняет их местами. </b><br>';

function twoNumber(&$a, &$b)
{
    // $a = $a + $b;
    // $b = $a - $b;
    // $a = $a - $b;

    $a += +$b - $b = $a;

    // $a^=$b^=$a^=$b;

    return "First: $a; Second: $b";
}

$a = random_int(1, 10);
$b = random_int(1, 10);

?>

<h1> <?= "First: $a; Second: $b" ?> </h1>
<h1> <?= twoNumber($a, $b) ?> </h1>

<p><a href="task4.php">Next</a></p>