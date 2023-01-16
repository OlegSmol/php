<style>
    .randColor {
        position: absolute;
        width: 30px;
        height: 30px;
    }
</style>

<?php
echo '<b> 1. Создать массив из 10 элементов, которые генерируются случайным образом от 10 до 100.
Перевернуть массив задом наперед, используя только одну переменную.</b><br>';

$arr0 = [];
$arr1 = [];
for ($i = 0; $i < 10; $i++) {
    $arr0[$i] = rand(10, 100);
}
for ($i = 9; $i >= 0; $i--) {
    $arr1[] = $arr0[$i];
}
echo '<h2> Input: ' . implode(',', $arr0) . '</h2>';
echo '<h2> Output: ' . implode(',', $arr1) . '</h2>';
// ----------------------------------------------------

echo '<br><b> 2. Создать массив из 10 элементов и заполнить eгo случайными числами от 10 до 100.
Создать переменную, записать в нее число и реализовать алгоритм поиска данного числа в массиве.
Если число было найдено, вывести порядковый номер элемента, если нет — вывести сообщение ' .
    htmlspecialchars('(No result for <Number>)') . ', где Number — число. </b><br>';

$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[$i] = rand(10, 100);
}
echo '<h2> Input: ' . implode(',', $array) . '</h2>';

echo '<form>
    <input type="text" name="number" placeholder="Ваша переменная">
    <input type="submit" value="Найти">
</form>';


if (isset($_GET['number'])) {
    $number = (int) $_GET['number'];
    $count = 0;

    foreach ($array as $key => $value) {
        if ($number === $value) {
            echo '<p> Number ' . $number . ' found . Index: ' . $key . '</p>';
            $count += 1;
        }
    }
    if ($count == 0) {
        echo '<p> No result for ' . $number . '</p>';
    }
}
// ----------------------------------------------------

echo '<br><b> 3. Создать массив рекламных баннеров, содержащий название баннера и URL-изображение
(Изображения сохраняются в папке img, которая находится в корне сайта). При каждом запуске страницы 
случайно выбирать и показывать баннер на странице.</b><br>';

$banners = array(
    "banner0" => '<img src="img/banner0.jpg">',
    "banner1" => '<img src="img/banner1.jpg">',
    "banner2" => '<img src="img/banner2.jpg">',
    "banner3" => '<img src="img/banner3.jpg">',
    "banner4" => '<img src="img/banner4.jpg">',
    "banner5" => '<img src="img/banner5.jpg">'
);

$i = rand(0, 5);
echo '<br><img src="img/banner' . $i . '.jpg" style="width: 800px; height: 450px;"><br>';
// ----------------------------------------------------

echo '<br><b> 4. Создать числовой массив из 5 элементов. Элементом массива является массив
из 5 цифр. Заполнить элементы случайными числами от 10 до 100. Вывести массив на
страницу и отсортировать элементы по возрастанию. </b><br>';

$arr = [];
$str = [];

echo '<div style="float: left; padding: 10px;">';
for ($i = 0; $i < 5; $i++) {
    $arr[$i] = [];
    for ($j = 0; $j < 5; $j++) {
        $arr[$i][$j] = rand(10, 100);
        $str[] = $arr[$i][$j];
    }
    echo '<p>' . implode(',', $arr[$i]) . '</p>';
}
echo '</div>';

sort($str);
$sortArr = array_chunk($str, 5);

echo '<div style="float: left; padding: 10px;">';
for ($i = 0; $i < 5; $i++) {
    echo '<p>' . implode(',', $sortArr[$i]) . '</p>';
}
echo '</div>
    <div style="clear:both;"></div>';
// ----------------------------------------------------

echo '<br><b> 5. Создать 2 массива цифр по 10 элементов каждый.
Разработать скрипт, который будет создавать третий массив и записывать в него те элементы,
которые присутствуют в одном массиве, но нет в другом. <b><br>';

$array1 = [];
$array2 = [];
$resultArray = [];

for ($i = 0; $i < 10; $i++) {
    $array1[$i] = rand(10, 99);
    $array2[$i] = rand(10, 99);
}
echo '<p><b> Input: </b></p>';
echo '<p> 1 array: ' . implode(',', $array1) . '</p>';
echo '<p> 2 array: ' . implode(',', $array2) . '</p>';

$resultArray = array_merge(array_diff($array1, $array2), array_diff($array2, $array1));

echo '<p><b> Output: </b></p>';
echo '<p>' . implode(',', $resultArray) . '</p>';
// ----------------------------------------------------

echo '<br><b> 6. Создать массив из 10 элементов вида X, Y. Дополнительно создать массив цветов.
Вывести на страницу 10 div, разместить их в координатах X, Y и закрасить случайным цветом из
массива цветов. </b><br>';

$coord = [];
$colors = [];

for ($i = 0; $i < 10; $i++) {
    $coord[$i] = array('X' => rand(10, 550), 'Y' => rand(10, 350));
}

for ($j = 0; $j < 10; $j++) {
    $colors[$j] = sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255));
}

echo '<div style="width:600px; height:400px; position:relative; padding:25px">';

foreach ($coord as $key => $items) {
    echo '<div class="randColor" style="top:' . $items['Y'] . 'px; left:' . $items['X'] . 'px; background-color:' . $colors[$key] . ';"></div>';
}

echo '</div>';

?>