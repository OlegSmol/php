<style>
    .fon {
        position: relative;
        padding-bottom: 170px;
    }

    .circle {
        position: absolute;
        top: 10;
        left: 100;
        border: 1px solid red;
        border-radius: 50%;
       
    }

    td{
        width: 50px;
        height: 50px;
    }
</style>

<?php

echo htmlspecialchars("1. Вывести первые 10 четных чисел и дополнительно:
a) посчитать их сумму;
b) посчитать их среднее значение.
Формат вывода: <span>-элемент; размер текста должен
быть равен порядковому номеру элемента * 5 (для
1-го: 1*5, для 2-го: 2*5 и т. д.); цвет текста — зеленый") . "<br>";

$i = 0;
$num = 1;
$sum = 0;
while ($i < 10) {
    if ($num % 2 == 0) {
        $i += 1;
        echo '<span style="color:green; font-size:' . $i * 5 . ' ">' . $num . ', </span> ';
        $sum = $sum + $num;
    }
    $num += 1;
}
echo "<br> Сумма десяти чисел равна " . $sum;
echo "<br> Среднее значение равно " . $sum / 10;
echo "<br>";

echo "<br> 2. Проверить, является ли число простым. Вывести
в параграфе результат в формате: Число — Простое/
Сложное.<br>";

$number = 21;
$i = 2;
$count = 0;
while ($i < $number) {
    if ($number % $i == 0) {
        $count += 1;
    }
    $i++;
}
if ($count != 0) {
    echo "<br> Число " . $number . " сложное <br>";
} else {
    echo "<br> Число " . $number . " простое <br>";
}

echo "<br> 3. Написать скрипт, который будет строить 10 эллипсов
только по контуру, которые выходят из одной точки
(каждый эллипс будет на 15 px больше, чем предыдущий, минимальный размер — 20 px )<br>";

$w = 20;
$h = 20;
$i = 1;
echo '<div class="fon">';
while ($i <= 10) {
    echo '<div class="circle" style="width:' . $w . '; height: ' . $h . '"></div>';
    $w = $w + 15;
    $h = $h + 15;
    $i++;
}
echo '</div>';

echo "<br> 4. Найти количество 4-значных чисел, в которых:
a) все цифры разные;
b) все цифры одинаковые.<br>";

$diffNum = 0;
$identNum = 0;
for($i = 1000; $i <= 9999; $i++){
    // $i0 = floor($i / 1000);
    // $i1 = floor($i / 100) % 10;
    // $i2 = floor($i / 10) % 10;
    // $i3 = $i % 10;

    if((floor($i / 1000) != floor($i / 100) % 10) && (floor($i / 1000) != floor($i / 10) % 10) && (floor($i / 1000) != $i % 10) && (floor($i / 100) % 10 != floor($i / 10) % 10) && (floor($i / 100) % 10 != $i % 10) && (floor($i / 10) % 10 != $i % 10)){
        $diffNum +=1;
    }
    if((floor($i / 1000) == floor($i / 100) % 10) && (floor($i / 1000) == floor($i / 10) % 10) && (floor($i / 1000) == $i % 10) && (floor($i / 100) % 10 == floor($i / 10) % 10) && (floor($i / 100) % 10 == $i % 10) && (floor($i / 10) % 10 == $i % 10)){
        $identNum +=1;
    }
}

echo '<br> Количество чисел c разными цифрами - ' . $diffNum;
echo '<br> Количество чисел c одинаковыми цифрами - ' . $identNum . '<br>';

echo "<br> 5. Перевести число из десятичной в двоичную систему
счисления, результат вывести в параграфе co стандартным размером текста и цветом.<br>";

$number = 59;
echo '<br> Заданное число - ' . $number;
$binary = '';
while ($number != 0) {
    $remains = $number % 2;
    $binary = $binary . $remains;
    $number = floor($number / 2);
}
echo '<br> Число в двоичной системе - ' . strrev($binary) . '<br>';

echo "<br> Вывести на экран шахматную доску элементом «таблица».
Добавить к шахматной доске фигуры (фигуры хранятся как png-файл в папке img)<br>";

echo '<br><table>';
for ($i = 1; $i <= 8; $i++){
    echo '<tr>';
    for ($j = 1; $j <= 8; $j++){
        if(($i % 2 == 1 && $j % 2 == 1) || ($i % 2 == 0 && $j % 2 == 0)){
            echo '<td style="background-color:white"></td>';
        }
        else {
            echo '<td style="background-color:black"></td>'; 
        }  
    }
    echo '</tr>';
}
echo '</table>';
    ?>