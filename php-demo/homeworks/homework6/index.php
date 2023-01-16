<?php
echo '<b> 1. Имеется массив из 10 элементов, структура элемента: name, company, position. 
Вывести на экран массив в следующем формате: «“Name” is working in “Company” as: “position”».</b><br>';

$workers = array(
    0 => array('Name' => 'Sergey', 'Company' => 'Microsoft', 'position' => 'Developer'),
    1 => array('Name' => 'Oleg', 'Company' => 'Apple', 'position' => 'QC Engineer'),
    2 => array('Name' => 'Olga', 'Company' => 'Amazon', 'position' => 'Project Manager'),
    3 => array('Name' => 'Oksana', 'Company' => 'ITTop', 'position' => 'Teacher'),
    4 => array('Name' => 'Andrey', 'Company' => 'Apple', 'position' => 'Solution Architect'),
    5 => array('Name' => 'Igor', 'Company' => 'Samsung', 'position' => 'Engineer'),
    6 => array('Name' => 'Olesya', 'Company' => 'Samsung', 'position' => 'Developer'),
    7 => array('Name' => 'Roman', 'Company' => 'Microsoft', 'position' => 'Product Owner'),
    8 => array('Name' => 'Yuriy', 'Company' => 'Microsoft', 'position' => 'QC Engineer'),
    9 => array('Name' => 'Irina', 'Company' => 'ITTop', 'position' => 'Teacher')
);

foreach ($workers as $key => $value) {
    echo '<p>' . $value['Name'] . ' is working in ' . $value['Company'] . ' on position: ' . $value['position'] . '</p>';
}
//  ----------------------------------------------------

echo '<br><b> 2. Отфильтровать массив из задания 1 и вывести работников в зависимости от компаний в виде списка. </b><br>';

$firms = [];
$uniqueFirms = [];

foreach ($workers as $key => $value) {
    $firms[] = $value['Company'];
}

for ($i = 0; $i < count($firms); $i++) {
    $counter = 0;
    for ($j = $i + 1; $j < count($firms); $j++) {
        if ($firms[$i] == $firms[$j]) {
            $counter += 1;
        }
    }
    if ($counter == 0) {
        $uniqueFirms[] = $firms[$i];
    }
}

echo '<ul>';
for ($i = 0; $i < count($uniqueFirms); $i++) {
    echo '<li>' . $uniqueFirms[$i] . '<ul>';
    foreach ($workers as $key => $value) {
        if ($value['Company'] == $uniqueFirms[$i]) {
            echo '<li>' . $value['Name'] . '</li>';
        }
    }
    echo '</ul></li>';
}
echo '</ul>';
// ----------------------------------------------------

echo '<br><b> 3. Создать массив из 10 чисел. B первый элемент записать число 1. 
Каждое следующее число генерируется случайно и записывается в массив при условии, если
оно больше предыдущего. Результат массива вывести на страницу.</b><br>';

$array[0] = 1;
$i = 1;
while ($i < 10) {
    $number = rand(1, 99);
    if ($number > $array[$i - 1] && $number < $i * 10) {
        $array[$i] = $number;
        $i++;
    }
}
echo '<p>' . implode(',', $array) . '</p>';
// ----------------------------------------------------

echo '<br><b> 4. Создать массив из 10 чисел. Элемент массива: число c плавающей точкой и степень 
округления. Заполнить массив, округлить и вывести на страницу. </b><br>';

$arr = [];

for ($i = 0; $i < 10; $i++) {
    $arr[$i] = array('num' => rand(0, 100) + mt_rand(0, mt_getrandmax()) / mt_getrandmax(), 'deg' => rand(0, 10));
    echo '<p>' . $arr[$i]['num'] . ' rounded to ' . $arr[$i]['deg'] . ': ' . round($arr[$i]['num'], $arr[$i]['deg']) . '</p>';
}
// ----------------------------------------------------

echo '<br><b> 5. Создать массив из 5 элементов. Элементом массива является массив из 5 цифр. 
Заполнить элементы случайными числами от 10 до 100. Вывести массив, минимальные значения в каждом столбце
выделить красным цветом. Найти сумму минимальных элементов в каждом столбце и их среднее значение. </b><br>';

$arr = [];
$min = [];
$summ = 0;

for ($i = 0; $i < 5; $i++) {
    $arr[$i] = [];
    for ($j = 0; $j < 5; $j++) {
        $arr[$i][$j] = rand(10, 99);
    }
}

for ($j = 0; $j < 5; $j++) {
    $min[$j] = $arr[0][$j];
    for ($i = 1; $i < 5; $i++) {
        if ($arr[$i][$j] < $min[$j]) {
            $min[$j] = $arr[$i][$j];
        }
    }
    $summ += $min[$j];
}

for ($i = 0; $i < 5; $i++) {
    echo '<p>';
    for ($j = 0; $j < 5; $j++) {
        if ($arr[$i][$j] === $min[$j]) {
            echo '<span style="color: red;">' . $arr[$i][$j] . ',</span>';
        } else {
            echo $arr[$i][$j] . ',';
        }
    }
    echo '</p>';
}

echo 'Summ of the minimums: ' . $summ;

?>