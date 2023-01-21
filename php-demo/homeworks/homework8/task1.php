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

echo '<br><b> 1. Разработать функцию, которая на входе принимает 3 параметра (число, число, действие)
и, в зависимости от действия, выполняет математическую операцию. Учесть, что нельзя делить на 0 и, если
передано некорректное действие, сообщать oб ошибке. </b> <br><br>';
?>

<form action="">
    <input type="text" name="number1" placeholder="Первое число">
    <input type="text" name="number2" placeholder="Второе число">
    <input type="text" name="operation" placeholder="Действие"><br>
    <br><input type="submit" value="Показать результат">
</form>

<?php

if (isset($_GET['number1']) && isset($_GET['number2']) && isset($_GET['operation'])) {
    $num1 = $_GET['number1'];
    $num2 = $_GET['number2'];
    $oper = $_GET['operation'];
    echo mathOper($num1, $num2, $oper);
}

function mathOper($num1, $num2, $oper)
{
    if ($oper == '+') {
        return $num1 . $oper . $num2 . ' = ' . ($num1 + $num2);
    } else if ($oper == '-') {
        return $num1 . $oper . $num2 . ' = ' . ($num1 - $num2);
    } else if ($oper == '*') {
        return $num1 . $oper . $num2 . ' = ' . ($num1 * $num2);
    } else if ($oper == '/') {
        if ($num2 == 0) {
            return $num1 . $oper . $num2 . ' = ' . '<span style="color:red;"> Делить на 0 нельзя </span>';
        } else
            return $num1 . $oper . $num2 . ' = ' . ($num1 / $num2);
    } else {
        return $num1 . $oper . $num2 . ' = ' . '<span style="color:red;"> Некорректная операция </span>';
    }
}

?>

<p><a href="task2.php">Next</a></p>