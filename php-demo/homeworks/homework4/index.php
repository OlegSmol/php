<style>
    img {
        width: 248px;
        height: 154px;
    }

    .heading {
        background-color: red;
    }

    .info {
        background-color: gray;
        color: white;
    }
</style>

<?php

echo "<b>1. Генерируется 100 случайных чисел. Скрипт выводит
их и ищет максимальное и минимальное число.</b><br>";

$min = 100;
$max = 0;
echo '<p style="width:500px;">';
for ($i = 1; $i <= 100; $i++) {
    $number = rand(1, 99);
    echo $number . " ";
    if ($number < $min) {
        $min = $number;
    }
    if ($number > $max) {
        $max = $number;
    }
}
echo '</p>';
echo '<p> Maximum: ' . $max . '</p>';
echo '<p> Minimum: ' . $min . '</p>';
// -------------------------------------------------------

echo "<b> 2. Считать все картинки из папки, в которой находится
скрипт, и вывести их на страницу.</b><br>";

echo '<br>';
for ($i = 1; $i <= 10; $i++) {
    echo '<img src="img/img' . $i . '.jpg">';
}
echo '<br>';
// ----------------------------------------------------

echo "<br><b> 3. Вывести на экран таблицу умножения от 2 до 10.</b><br>";
echo '<br><table><tr>';
for ($i = 2; $i <= 10; $i++) {
    echo '<td><table>';
    for ($j = 1; $j <= 10; $j++) {
        echo '<tr><td>' . $i . ' x ' . $j . ' = ' . $i * $j . '</td></tr>';
    }
    echo '</table></td>';
    if ($i == 6) {
        echo '</tr><tr>';
    }
}
echo '</tr>';
echo '</table>';
// ----------------------------------------------------

echo '<br><b> 4. B банке открыли депозит под 20% годовых. Ha депозит положили 300 единиц. 
Какая сумма единиц будет через 20 лет? Какая будет прибыль? Вывести в таблице
сумму и прибыль за каждый год.</b><br>';

echo '<br><table><tr>';
echo '<td class="heading">Year</td>';
echo '<td class="heading">Summ Start</td>';
echo '<td class="heading">Summ End</td>';
echo '<td class="heading">Profit</td>';
echo '</tr>';
$start = 300;
for ($i = 1; $i <= 20; $i++) {
    echo '<tr>';
    echo '<td class="info">' . $i . '</td>';
    echo '<td class="info">' . round($start, 2) . '</td>';
    $end = $start * 1.2;
    echo '<td class="info">' . round($end, 2) . '</td>';
    echo '<td class="info">' . round(($end - $start), 2) . '</td>';
    echo '</tr>';
    $start = $end;
}
echo '</table><br>';
// ----------------------------------------------------

echo '<br><b> 5. Вывести число задом наперед (347689 -> 986743)</b><br>';

echo '<br><form method="get">
    <input type="text" name="number" placeholder="Ваше число"><br>
    <br><input type="submit" value="Показать результат">
</form>';
if (isset($_GET['number'])) {
    $number = (int) $_GET['number'];
    echo '<h1 style="color:red">' . $number . '</h1><h1 style="color:green">';
    $result = '';
    while ($number > 0) {
        $result = $number % 10;
        $number = floor($number / 10);
        echo $result;
    }
    echo '</h1>';
}
// ----------------------------------------------------

echo "<b> 6. Разработать скрипт, который будет разбивать число на цифры, считать их количество,
находить самую большую, самую маленькую цифру в числе, считать сумму цифр, среднее значение.</b><br>";

echo '<br><form method="get">
    <input type="text" name="num" placeholder="Ваше число"><br>
    <br><input type="submit" value="Показать результат">
</form>';
if (isset($_GET['num'])) {
    $num = (int) $_GET['num'];
    echo '<h1>' . $num . '</h1>';

    $min = 9;
    $max = 0;
    $sum = 0;
    $length = 0;
    $digits = '';

    while ($num > 0) {
        $digit = $num % 10;
        $num = floor($num / 10);
        if ($num > 0) {
            $digits .= $digit . ',';
        } else {
            $digits .= $digit;
        }

        $length += 1;
        if ($digit < $min) {
            $min = $digit;
        }
        if ($digit > $max) {
            $max = $digit;
        }
        $sum += $digit;
    }
    echo '<h2> Digits in the number: ' . strrev($digits) . '</h2><p>';
    echo 'Count of digits:<b>' . $length . '</b>, Max: <b>' . $max . '</b>, Min: <b>' . $min . '</b>, Summ: <b>' . $sum . '</b>, AVG:<b>' . $sum / $length . '</b>';
}

?>