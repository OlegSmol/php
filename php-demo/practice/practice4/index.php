<style>
    tr,
    td {
        border: 3px double black;
    }

    .clear{
        clear: both;
    }

    .col {
        float: left;
        background-color: red;
        border: 1px solid black;
        width: 30px;
        height: 30px;
    }

    .text{
        width: 50px;
    }

    .day{
        border: none;
        font-weight: 600;
    }

    .cell{
        border: 1px solid white;
    }
</style>

<?php
echo '<b>1. Вывести все високосные года (до текущего) на страницу
в виде таблицы c количеством столбцов равным 20. </b><br><br>';

$years = [];
$current = 0;

while ($current < 2022) {
    if (
        ($current % 4 === 0
            && $current % 100 !== 0)
        || ($current % 400 === 0)
    ) {
        $years[] = $current;
    }
    $current++;
}
?>

<table>
    <tr>
        <?php
        foreach ($years as $index => $year) {
            echo "<td>$year</td>";

            if ($index > 0 && ($index + 1) % 20 === 0) {
                echo "</tr><tr>";
            }
        }
        ?>
    </tr>
</table>

<?php
// -------------------------------------------------

echo '<br><b> 2. Вывести две пирамиды на 15 строк, одна должна быть
заполнена внутри, a вторая — пустая </b><br>';

echo '<br> Заполненная: <br><br>';
$j = 1;
for ($i = 1; $i <= 15; $i++) {
    while ($j <= $i) {
        echo '<span>*</span>';
        $j++;
    }
    $j = 1;
    echo '<br>';
}

echo '<br> Пустая: <br><br>';
for ($i = 1; $i <= 15; $i++) {
    while ($j <= $i) {
        if ($j == 1 || $j == $i || $i == 15) {
            echo '<span>*</span>';
        } else {
            echo '<span>&nbsp;&nbsp;</span>';
        }

        $j++;
    }
    $j = 1;
    echo '<br>';
}
// -------------------------------------------------

echo '<br><b> 3. Вывести наибольшее число, на которое число на входе может поделиться нацело. 
Входное число должно быть нечетным и содержать минимум 5 цифр. </b><br>';

echo '<br><form method="get">
    <input type="text" name="number" placeholder="Ваше число"><br>
    <br><input type="submit" value="Показать результат">
</form>';

if (isset($_GET['number'])) {
    $number = (int) $_GET['number'];

    if ($number % 2 == 0 || strlen((string) $number) < 5) {
        echo 'Вы ввели данные неверно<br>';
    } else {
        echo '<h1> Ваше число: ' . $number . '</h1>';
        $divider = 1;

        for ($i = 3; $i < $number; $i++) {
            if ($number % $i == 0) {
                $divider = $i;
            }
        }
        echo '<h2> Наибольший делитель: ' . $divider . '</h2>';
    }
}
// -------------------------------------------------

echo '<br><b> 4. Посчитать !N, которое записывается в переменной. !N — произведение натуральных чисел от единицы
до N включительно. </b><br>';

echo '<br><form method="get">
    <input type="text" name="N" placeholder="Ваша переменная"><br>
    <br><input type="submit" value="Показать факториал">
</form>';
if (isset($_GET['N'])) {
    $N = (int) $_GET['N'];
    $fact = 1;

    echo '<h1> Ваше число: ' . $N . '</h1>';
    for ($i = 1; $i <= $N; $i++) {
        $fact = $fact * $i;
    }
    echo '<p>!' . $N . ' = ' . $fact . '</p>';
}
// -------------------------------------------------

echo '<br><b> 5. Вывести квадрат, состоящий из div размером 30x30px. Количество div, составляющих квадрат,
инициализируется в переменной </b><br>';

echo '<br><form method="get">
    <input type="text" name="count" placeholder="Ваша переменная"><br>
    <br><input type="submit" value="Вывести квадрат">
</form>';

if (isset($_GET['count'])) {
    $count = (int) $_GET['count'];

    echo '<p> Count: ' . $count . '</p>';
    for ($i = 1; $i <= $count; $i++) {
        for ($j = 1; $j <= $count; $j++) {
            echo '<div class="col"></div>';
        }
        echo '<div class="clear"></div>';
    }
}
// -------------------------------------------------

echo '<br><b> 6. Разработать страницу c таблицей. Первая колонка таблицы — номер месяца, 
первый столбец — номер дня. Bce остальное — input type text. </b><br>';

echo '<br><table><tr><td class="day"></td>';

for ($m = 1; $m <= 12; $m++) {
    echo '<td class="day">' . $m . '</td>';
}
echo '</tr>'; 
for ($i = 1; $i <= 31; $i++) {
    echo '<tr>'; 
    echo '<td class="day">' . $i . '</td>';
    for ($j = 1; $j <= 12; $j++) {
        echo '<td class="cell"><input class="text" type="text"></td>';
    }
    echo '</tr>'; 
}
echo '</table>';
?>