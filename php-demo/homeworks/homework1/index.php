<?php
echo '1. Конкатенация: вывод на страницу («Hello! My name
is Name»), где «Name» — это переменная, в которую
вводится имя (выводится на странице в кавычках)<br/>';

$Name = 'Oleg';
echo '<br/> Hello! My name is ' . $Name . '<br/>';

echo '<br/>2. Добавить к заданию 1 фразу «I’m Age», где Age — это
переменная c возрастом студента (выводится c новой строки).<br/>';

$Age = 43;
echo '<br/> I’m ' . $Age . '<br/>';

echo '<br/>3. B задание 3 из практических добавить вывод действий в таком формате: \'a\'+\'b\'=\'rez\',
где a — это значение 1-й переменной, b — это значение 2-й переменной, rez — результат операции между ними.<br/>';
$number1 = 12;
$number2 = 8;
echo '<br/>Первое число - ' . $number1 . ', второе число - ' . $number2;
echo '<br/>'. $number1 . ' + ' . $number2 . ' = ' . ($number1 + $number2);
echo '<br/>'. $number1 . ' - ' . $number2 . ' = ' . ($number1 - $number2);
echo '<br/>'. $number1 . ' * ' . $number2 . ' = ' . $number1 * $number2;
echo '<br/>'. $number1 . ' / ' . $number2 . ' = ' . $number1 / $number2;
echo '<br/>'. $number1 . ' % ' . $number2 . ' = ' . $number1 % $number2 . "<br/>";

echo '<br/>4. Поменять 2 числа местами без использования 3-й переменной.<br/>';

$num1 = 7;
$num2 = 10;
echo "<br/>Первое число - " . $num1 . ", второе число - " . $num2;
$num1 = $num1 + $num2;
$num2 = $num1 - $num2;
$num1 = $num1 - $num2;
echo "<br/>B обратном порядке: первое число " . $num1 . ", второе число " . $num2 . "<br/>";

echo '<br/>5. Разработать php-страницу, в которой выбрать правильные
html-элементы и вывести 3 вопроса в следующем формате:<br/>
a) 1 — вопрос c 4 вариантами ответа и только 1 из них правильный;<br/>
b) 2 — вопрос c 4 вариантами ответа и может быть несколько правильных;<br/>
c) 3 — вопрос c развернутым ответом.<br/>';

echo '<br/><label for="">Ваш возраст: <br/>
    <input type="radio" name="age" value="До 18">До 18<br/>
    <input type="radio" name="age" value="18 - 25">18 - 25<br/>
    <input type="radio" name="age" value="26 - 40">26 - 40<br/>
    <input type="radio" name="age" value="Больше 40">Больше 40<br/>
    </label>';
echo '<br/><label for="">Какие браузеры Вы используете: <br/>
    <input type="checkbox" name="browser" value="Microsoft Edge">Microsoft Edge <br/>
    <input type="checkbox" name="browser" value="Opera">Opera <br/>
    <input type="checkbox" name="browser" value="Mozilla Firefox">Mozilla Firefox <br/>
    <input type="checkbox" name="browser" value="Google Chrome">Google Chrome<br/>
    </label>';
echo '<br/><label for=""> Ваш комментарий: </label><br/>
    <br/><textarea name="comment" cols="40" rows="5"></textarea><br/>';    

echo '<br/>6. Разработать страницу c переменными:<br/>
a) tag, background_color, color, width, height;<br/>
b) Значение в этих переменных — это значение соответствующего property тега, который описан в
 переменной tag;<br/>
c) Вывести тег, записанный в переменной tag co стилями, которые записаны в переменных.<br/>';

$tag = 'div';
$background_color = 'yellow';
$color = 'blue';
$width = '150px';
$height = '150px';

echo '<br/><' . $tag . ' style="background-color:' . $background_color . '; color:' . $color . '; width:' . $width . '; height:' . $height . '">Hello!</' . $tag . '>'

?>