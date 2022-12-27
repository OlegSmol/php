<?php
 echo "1. Проверить переменную на четность <br>";
  $number = 6;

  if($number % 2 === 0) {
      echo "Число " . $number . " четное <br>";
  }        
  else {
    echo "Число " . $number . " нечетное <br>";
  }
  echo "<br>";
     
  
  echo " 2. Вывести на экран большее из двух чисел <br>";
  $number1 = 12;
  $number2 = 7;

  if($number1 < $number2) {
    echo "Число " . $number2 . " больше числа " . $number1 . "<br>";
}        
else {
    echo "Число " . $number1 . " больше числа " . $number2 . "<br>";
}
echo "<br>";



echo " 3. Поменять знак числа, если оно меньше 0, и вывести на экран<br>";
  $number = -10;

  if($number < 0) {
    $number = -1 * $number;
}        
    echo "$number <br>";
    echo "<br>";


    echo " 4. Вывести квадрат числа, если оно лежит в промежутке
  от A до B. Если число не лежит в промежутке, вы-
  вести сообщение: «Число больше максимального на
  N», если число выходит за пределы большего из них.
  Или «Число меньше минимального на N», если число
  выходит за пределы меньшего из них <br>";

  $min = 1;
  $max = 10;
  $x = 7;

  if($x < $max && $x > $min) {
    echo "Число в заданном интервале от " .  $min . " до " . $max . ". Квадрат числа равен " . $x* $x . "<br>";
}        
elseif($x > $max) {
    $diff = $x - $max;
    echo "Число больше максимального на " . $diff . "<br>";
}
elseif($x < $min) {
    $diff = $min - $x;
    echo "Число меньше минимального на " . $diff . "<br>"; 
}
echo "<br>";

echo htmlspecialchars(" 5. Есть переменная, в которую записана цифра.
    Цифра это номер заголовка (тег <h1>...<h6>). На выходе
    скрипт проверяет, возможно ли построить тег (входит
    ли число в диапазон от 1 до 6) и, если возможно, то
    он его строит, если нет, выводит на экран сообщение
    об ошибке") . "<br>" ;

$tag = 2;
if($tag <= 6 && $tag >= 1) {
    echo "<h" . $tag . ">Тег " . htmlspecialchars("<h"). $tag . htmlspecialchars(">") . " существует </h" . $tag . ">";
} 
else {
    echo "<p>Тег " . htmlspecialchars("<h"). $tag . htmlspecialchars(">") . " не существует</p> <br>";
}       

echo " 6. Есть две переменные, в которые записаны день и 
    месяц. Программа анализирует эти два числа и говорит
    на выходе, какое это время года, название месяца,
    первая это или вторая половина месяца <br>";

    $day = 10;
    $month = 1;

    if($day <= 15 && $day >= 1) {
        $dec = "первая половина месяца";
    } 
    else {
        $dec = "вторая половина месяца";
    } 
switch ($month) {
    case '1':
        $mon = "январь";
        $season = "зима";
        break;
    case '2':
         $mon = "февраль";
         $season = "зима";
         break;
    case '3':
        $mon = "март";
        $season = "весна";
         break;
    case '4':
        $mon = "апрель";
        $season = "весна";
        break;
    case '5':
        $mon = "май";
        $season = "весна";
        break;
    case '6':
        $mon = "июнь";
        $season = "лето";
        break;
    case '7':
        $mon = "июль";
        $season = "лето";
         break;
    case '8':
        $mon = "август";
        $season = "лето";
        break;
    case '9':
         $mon = "сентябрь";
         $season = "осень";
        break;
    case '10':
        $mon = "октябрь";
        $season = "осень";
        break;
    case '11':
        $mon = "ноябрь";
        $season = "осень";
         break;
    case '12':
        $mon = "декабрь";
        $season = "зима";
        break;
    default:
        echo "";
        break;
}
echo "<p>День " . $day . ", месяц "  . $month . ".</p>";
echo "<p>Время года " . $season . ", месяц " . $mon . ", " . $dec . "</p>";
echo "<br>";


echo " 7. Реализовать конвертер единиц памяти: есть 4 переменные: 
    input_number, from, to. В переменные from и to записывается, с какой
    на какую единицу происходит конвертация. <br>";

$from = 'KB';
$to = 'MB';
$input_number = 5200;
$koef = 1024;

echo "<p>" . $input_number . $from . " = " . ($input_number / $koef) . $to . "</p>";

?>





