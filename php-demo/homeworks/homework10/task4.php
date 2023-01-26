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

echo '<br><b> 4. Разработать функцию, которая на вход принимает пример в виде строки, a на выходе возвращает 
подсчитанный результат. Требования к примеру: однозначные числа, действия +, -, *, /. Операции должны происходить 
в правильной математической последовательности (сначала действия *, /, затем +, -).</b><br><br>';

function examples($example)
{
    $result = eval("echo $example;");
    return $result;
}

?>

<form method="get">
    <input type="text" name="example" placeholder="Ваш пример"><br>
    <br><input type="submit" value="Показать результат">
</form>

<?php

if (isset($_GET['example'])) {
    $example = $_GET['example'];

?>
<h1> <?= $example ?> = <?= examples($example) ?> </h1>

<?php
}
?>

<p><a href="task5.php">Next</a></p>