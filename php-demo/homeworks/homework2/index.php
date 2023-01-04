<style>
.fon{
    position: relative;
    padding-bottom: 500px;
    border: 1px solid black;
}
</style>

<?php
echo "1. Есть 2 переменные. Проверить и вывести на экран, является ли значение
первой переменной кратным значению второй (первое число кратно второму, если
делится на него без остатка). <br>";

$number1 = 18;
$number2 = 5;
echo "<br>Первое число - " . $number1 . ", второе число - " . $number2;

if ($number1 % $number2 === 0) {
    echo "<br> Число " . $number1 . " кратно числу " . $number2 . "<br>";
} else {
    echo "<br> Число " . $number1 . " не кратно числу " . $number2 . "<br>";
}

echo "<br> 2. Вывести квадрат большего из двух чисел. <br>";
$number1 = 8;
$number2 = 11;
echo "<br>Первое число - " . $number1 . ", второе число - " . $number2;

if ($number1 < $number2) {
    echo "<br> Квадрат большего числа равен " . $number2 * $number2 . "<br>";
} else {
    echo "<br> Квадрат большего числа равен " . $number1 * $number1 . "<br>";
}

echo "<br> 3. Есть переменная, в ней сохранен номер месяца (в коде скрипта). 
Скрипт возвращает количество дней в этом месяце.<br>";
$month = 2;
echo '<p>Month = ' . $month . '</p>';

if ($month == 2) {
    echo '<p>Days in the month: 28</p>';
}
if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
    echo '<p>Days in the month: 31</p>';
}
if ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
    echo '<p>Days in the month: 30</p>';
}

echo " 4. Есть переменная, в ней (в скрипте) сохранен год. Проверить, является ли внесенный год високосным.<br>";

$year = 1900;
echo '<p>Year = ' . $year . '</p>';

if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo $year . ' is leap-year<br>';
} else {
    echo $year . ' isn\'t leap-year<br>';
}

echo '<br> 5. Вывести сумму двух чисел, если они оба кратны 3, или
вывести результат деления при условии, что второе число не равно нулю
(если ноль, то выводится сообщение o некорректном вводе).<br>';

$num1 = 18;
$num2 = 6;
echo "<br>Первое число - " . $num1 . ", второе число - " . $num2 . '<br>';

if ($num1 % 3 == 0 && $num2 % 3 == 0 && $num2 != 0) {
    echo 'Сумма чисел равна ' . ($num1 + $num2) . '<br>';
} else {
    if ($num2 != 0) {
        echo 'Частное равно ' . $num1 / $num2 . '<br>';
    } else {
        echo 'Некорректно введены данные <br>';
    }
}

echo "<br> 6. Разработать страницу, которая проверяет, авторизован ли пользователь. Ha странице есть 
переменная session_id. Если в переменной записано число 0,то пользователь видит форму регистрации 
(логин и пароль). Если 1, то выводит сообщение «Вы зарегистрированы, войдите». <br>";

$session_id = 1;

if ($session_id == 0) {
    echo '<h1>Please register</h1>';
    echo 'Session ID:' . $session_id . '<br>';
    echo '<br><label for=""><input type="text" placeholder="Login"></label>';
    echo '<br><label for=""><input type="password" placeholder="Password"></label><br/><br/>';
} else {
    echo '<h1>You are already registered</h1>';
    echo 'Session ID:' . $session_id . '<br>';
    echo '<br><a href="">Login</a><br>';
}

echo "<br> 7. Разработать программу, которая будет рисовать div по указанным в переменных 
координатам c указанным цветом, если координаты не выходят за пределы экрана. <br>";

$x = 50;
$y = 50;
$color = 'Green';
$top = 100;
$left = 400;

echo '<p> X = ' . $x . ", Y - " . $y . ", Color = " . $color . '</p>';

if (($top >= 0 && $top <= 450) && ($left >= 0 && $left <= 950)){
echo '<div class = "fon" style="width: 1000px;"><div style="position: absolute; top:' . $top . '; left:' . $left . '; width:' . $x . 'px; height:' . $y . 'px; background-color: green;"></div></div>';
} else{
    echo 'Неверно заданы координаты';
}
?>