<?php

echo '<b> 1. Разработать библиотеку для работы co строками. Реализовать в ней следующие функции:<br>
a.Функцию поиска символа в строке и подсчета количества данного символа в строке. Ha входе функция
принимает строку и символ, на выходе возвращает число, которое будет количеством данного символа в строке.<br>
b.Функцию замены одного символа на другой. Функция принимает строку и два символа. Возвращает новую
строку, но все символы, которые равны первому символу в параметрах заменяет на второй.<br>
c.Функцию вывода строки задом наперед. Функция принимает строку и возвращает ee задом наперед.<br>
d.Функцию разбиения строки на массив слов. Функция принимает строку, ищет в ней пробел и делит
ee по символу пробела. Функция возвращает массив слов.<br>
e.Функцию, которая проверяет слово и сообщает, что оно написано кириллицей или латынью. Функция
принимает строку, возвращает слово Cyrillic, если слово написано кириллицей, и Latin, если латынью. </b><br>';

echo '<b> 2. Создать страницу, на которой вызвать все функции
и вывести их результат. </b><br>';

include("./string.php");

echo '<br> <form>  a)
<input type="text" name="str" placeholder="Введите строку"><br>
<input type="text" name="symbol" placeholder="Введите символ"><br>
<br><input type="submit" value="Показать результат">
</form>';

if (isset($_GET['str']) && isset($_GET['symbol'])) {
    $str = $_GET['str'];
    $symbol = $_GET['symbol'];
    ?>

    <p>Find: Text = "
        <?= $str ?>" ; Simbol = "
        <?= $symbol ?>" ; Result =
        <?= search($str, $symbol) ?>
    </p>

    <?php
}

echo '<br><form> b)
<input type="text" name="text" placeholder="Введите строку"><br>
<input type="text" name="sym1" placeholder="Введите символ 1"><br>
<input type="text" name="sym2" placeholder="Введите символ 2"><br>
<br><input type="submit" value="Показать результат">
</form>';

if (isset($_GET['text']) && isset($_GET['sym1']) && isset($_GET['sym2'])) {
    $text = $_GET['text'];
    $sym1 = $_GET['sym1'];
    $sym2 = $_GET['sym2'];
    ?>

    <p>Replace: Text = "<?= $text ?>" ; Simbol 1 = "<?= $sym1 ?>" ; Simbol 2 = "<?= $sym2 ?>" ; Result = <?= change($text, $sym1, $sym2) ?></p>

    <?php
}

echo '<br><form> c)
<input type="text" name="text3" placeholder="Введите строку"><br>
<br><input type="submit" value="Показать результат">
</form>';

if (isset($_GET['text3'])) {
    $text3 = $_GET['text3'];
    ?>

    <p>Reflect: Text = "<?= $text3 ?>" ; Result = <?= reverse($text3) ?></p>

    <?php
}

echo '<br><form> d)
<input type="text" name="text4" placeholder="Введите строку"><br>
<br><input type="submit" value="Показать результат">
</form>';

if (isset($_GET['text4'])) {
    $text4 = $_GET['text4'];
    ?>

    <p>Split: Text = "<?= $text4 ?>" ; Result = <?=print_r(stringArray($text4)) ?></p>

    <?php
}

echo '<br><form> e)
<input type="text" name="word" placeholder="Введите слово"><br>
<br><input type="submit" value="Показать результат">
</form>';

if (isset($_GET['word'])) {
    $word = $_GET['word'];
    ?>

    <p>Alphabet: Text = "<?= $word ?>" ; Output = <?=language($word) ?></p>

    <?php
}

?>