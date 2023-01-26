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
echo '<br><b> 5. Разработать функцию, которая на входе принимает массив, a на выходе возвращает
два массива. B один массив записываются только четные элементы из входного массива, 
во второй — нечетные.</b><br><br>';

function evenOdd($arr) {
    $even = [];
    $odd = [];
    foreach ($arr as $key => $value) {
        if ($value % 2 === 0) {
            $even[] = $value;
        } else {
            $odd[] = $value;
        }
    }
return '<h3> Output pair: ' .  implode(',', $even) . '</h3> <h3> Output not pair: ' . implode(',', $odd) . '</h3>';
}

$arr = [];

for ($i = 0; $i < 10; $i++) {
    $arr[$i] = rand(10, 100);
}

echo '<h1> Array: ' . implode(',', $arr) . '</h1>';
echo evenOdd($arr);

?>

<p><a href="index.php">Main page</a></p>