<style>
    .circle {
        float: left;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: blue;
    }

    td {
        width: 50px;
        height: 50px;
        text-align: center;
    }

    td:hover {
        background-color: black;
        color: white;
        transition: 0.5s linear;
    }

    .weekend{
        color:red;
    }

    .weekend:hover {
        background-color: red;
        color: white;
        transition: 0.5s linear;
    }

    img{
        float: left;
        width: 200px;
        height: 150px;
    }

    .imgs{
        content: '';
        display: table;
        clear: both; 
    }

</style>

<?php

echo "<b>1. Вывести N нечетных чисел (N записывается в переменной) и дополнительно:<br>
a) посчитать их среднее значение;<br>
b) вывести их в обратном порядке (от большего к меньшему).</b><br>";

$n = 15;
$count = 0;
$i = 1;
$sum = 0;
$numbers = '';
while ($count < $n) {
    if ($i % 2 != 0) {
        $count += 1;
        if ($count == $n) {
            $numbers = $numbers . $i;
        } else {
            $numbers = $numbers . $i . ',';
        }
        $sum += $i;
    }
    $i++;
}
echo '<br> Количество нечетных чисел ' . $n . '<br>';
echo '<br><span style="color:red; font-size:' . ($n * 2 - 1) . ' ">' . $numbers . '</span><br>';
echo '<br> Среднее значение ' . $sum / $n . '<br>';

$revers = explode(',', $numbers);
$revers = array_reverse($revers);
$revNumbers = join(',', $revers);
echo '<br><span style="color:red; font-size:' . ($n * 2 - 1) . ' ">' . $revNumbers . '</span><br>';
// -------------------------------------------------------

echo "<br><b> 2. Найти количество 4-значных чисел, в которых:<br>
c) цифры зеркальные (например, 2112);<br>
d) все цифры четные;<br>
e) все цифры нечетные;<br>
f) цифры идут в порядке от большего к меньшему (например, 4321).</b><br>";

$mirror = 0;
$even = 0;
$odd = 0;
$order = 0;
for ($i = 1000; $i <= 9999; $i++) {
    $str_i = (string) $i;
    if ($str_i[0] == $str_i[3] && $str_i[1] == $str_i[2]) {
        $mirror += 1;
    }
    if ($str_i[0] % 2 == 0 && $str_i[1] % 2 == 0 && $str_i[2] % 2 == 0 && $str_i[3] % 2 == 0) {
        $even += 1;
    }
    if ($str_i[0] % 2 != 0 && $str_i[1] % 2 != 0 && $str_i[2] % 2 != 0 && $str_i[3] % 2 != 0) {
        $odd += 1;
    }
    if (($str_i[0] - 1 == $str_i[1]) && ($str_i[1] - 1 == $str_i[2]) && ($str_i[2] - 1 == $str_i[3])) {
        $order += 1;
    }
}
echo '<br>Количество зеркальных чисел: ' . $mirror;
echo '<br>Количество чисел c четными цифрами: ' . $even;
echo '<br>Количество чисел c нечетными цифрами: ' . $odd;
echo '<br>Количество чисел c  цифрами по порядку: ' . $order . '<br>';
// ----------------------------------------------------

echo "<br><b> 3. Вывести на экран 10 кругов в один ряд (диаметр 50 px, цвет синий).</b><br>";

$width = 50;
$height = 50;
$border_radius = 50;
$background_color = 'blue';
$i = 1;
echo '<br>';
while ($i <= 10) {
    echo '<div class="circle"></div>';
    $i++;
}
echo '<br><br>';
// ----------------------------------------------------

echo '<br><br><b> 4. Перевести число из двоичной в шестнадцатеричную систему счисления. 
Формат вывода по умолчанию, поместить в элемент</b><br><br>';
?>

<form method="get">
    <input type="text" name="binary" placeholder="Введите число">
    <input type="submit" value="Перевести">
</form>

<?php
if (isset($_GET['binary'])) // если передали методом GET после с именем binary
{
    $binary = (int) $_GET['binary'];
    echo 'Вы ввели число в двоичной системе:' . $binary . '<br>';
    $count = strlen($binary); //длина строки в символах

    while (($count % 4) != 0) // если кол-во символов не кратно 4-ем
    {
        $binary = '0' . $binary; // добавляем в в начало нолик
        $count = strlen($binary); // вычисляем длину снова
    }
    $hex = ''; // создаем пустую строковую переменную
    for ($i = 0; $i < $count; $i += 4) // пока счетчик меньше кол-ва символов, прибавляем к $i каждый раз еще 4
    {
        $hex .= strtr(
            substr($binary, $i, 4),
            //добавляем к строке $hex замену четырех символов $binary с позиции $i
            array(
                '0000' => '0',
                '0001' => '1',
                '0010' => '2',
                '0011' => '3',
                '0100' => '4',
                // заменяем 4 символа на 16-тиричный соответствующий
                '0101' => '5',
                '0110' => '6',
                '0111' => '7',
                '1000' => '8',
                '1001' => '9',
                '1010' => 'A',
                '1011' => 'B',
                '1100' => 'C',
                '1101' => 'D',
                '1110' => 'E',
                '1111' => 'F'
            )
        );
    }
    echo 'Число в шестнадцатеричной системе:' . $hex . '<br><br>'; // результат 
}
// ----------------------------------------------------

echo '<b>' . htmlspecialchars(" 5. Отобразить число в римской системе счисления. 
Формат вывода по умолчанию, поместить в элемент <p>. (число до 1000)") . '</b><br>';

$number = 782;
echo '<br>Number: ' . $number . '<br>';
$numberStr = (string) $number;
$numberRom = '';
$trans[0] = array("1" => "C", "2" => "CC", "3" => "CCC", "4" => "CD", "5" => "D", "6" => "DC", "7" => "DCC", "8" => "DCCC", "9" => "CM");
$trans[1] = array("1" => "X", "2" => "XX", "3" => "XXX", "4" => "XL", "5" => "L", "6" => "LX", "7" => "LXX", "8" => "LXXX", "9" => "XC");
$trans[2] = array("1" => "I", "2" => "II", "3" => "III", "4" => "IV", "5" => "V", "6" => "VI", "7" => "VII", "8" => "VIII", "9" => "IX");

for ($i = 0; $i < strlen($numberStr); $i++) {
    $numberRom .= strtr($numberStr[$i], $trans[$i]);
}
echo '<p>Romain: ' . $numberRom . '</p>';
// ----------------------------------------------------

echo "<b> 6. Вывести на экран календарь на текущий месяц:<br>
a) выходные и праздники выделить красным цветом текста;<br>
b) текущий день обвести рамкой синего цвета;<br>
c) добавить стиль hover, который будет менять цвет на противоположный: цвет текста станет белым,
a цвет заднего фона красным или черным.</b><br>";

$time = strtotime(date('Y') . '-' . date('n') . '-01');
$firstDayMonth = date('w', $time);
if ($firstDayMonth == 0) {
    $firstDayMonth = 7;
}

$emptySell = 1;
$countDays = 1;
echo '<br>Год - ' . date('Y') . ', месяц - ' . date('F');

echo '<br><table>';

echo '<tr>';
while ($emptySell < $firstDayMonth) {
    echo '<td></td>';
    $emptySell++;
}
$countDaysWeek = $emptySell;

while ($countDays <= date('t')) {
    while ($countDaysWeek <= 7) {
        if ($countDays <= date('t')) {
            if ($countDaysWeek == 6 || $countDaysWeek == 7) {
                if ($countDays == date('d')) {
                    echo '<td class="weekend" style="border-color:blue; border-style: solid">' . $countDays . '</td>';
                } else {
                    echo '<td class="weekend">' . $countDays . '</td>';
                }
            } else {
                echo '<td>' . $countDays . '</td>';
            }
        }
        $countDaysWeek++;
        $countDays++;
        if (($countDays > date('t')) && ($countDaysWeek <= 7)) {
            echo '<td></td>';
        }
    }
    echo '</tr>';
    $countDaysWeek = 1;
    echo '<tr>';
}
echo '</table>';
// ----------------------------------------------------

echo "<b> 7. B папке img есть 10 файлов (названные от img1 до
img10) c расширением jpg. Разработать скрипт, который
отобразит их на странице по 5 изображений в ряд
(размер изображения 200x150 px).</b><br>";

echo '<div class = "imgs">';
for ($i=1; $i <= 10; $i++) {
    echo '<img src="img/img' . $i . '.jpg">';
    if ($i % 5 == 0) {
        echo '</div><div class = "imgs">';
    }
}
echo '</div>';

?>