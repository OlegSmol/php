
<style>
    .figure {
        position: absolute;
        width: 40px;
        height: 40px;
    }
</style>

<?php
echo '<b> 1. Создать массив из 10 элементов (чисел). Вывести:<br>
a) элементы, которые больше предыдущих;<br>
b) среднее значение и сумму всех элементов;<br>
c) отсортировать нечетные элементы массива по убыванию.</b><br>';

$arr0 = [];
for ($i = 0; $i < 10; $i++) {
    $arr0[$i] = rand(1, 20);
}
echo '<h2> Input array: ' . implode(',', $arr0) . '</h2>';

$arr1 = [];
for ($i = 1; $i < 10; $i++) {
    if ($arr0[$i] > $arr0[$i - 1]) {
        $arr1[] = $arr0[$i];
    }
}
echo '<h5> Elements whith are more prevoius: ' . implode(',', $arr1) . '</h5>';

$summ = array_sum($arr0);
$AVG = $summ / 10;
echo '<h5> Summ: ' . $summ . ', AVG: ' . $AVG . '</h5>';

$arrOdd = [];
foreach ($arr0 as $i => $value) {
    if ($value % 2 != 0) {
        $arrOdd[] = $value;
    }
}
rsort($arrOdd);
echo '<h4> Sorted not pair elements: ' . implode(',', $arrOdd) . '</h4>';
// ----------------------------------------------------

echo '<b> 2. Создать массив из 5 дат. Скриптом определить сколько
дней находится в пределах между двумя соседними датами.</b><br/>';

$dates = [];

for ($i = 0; $i < 5; $i++) {
    $timestamp = rand(strtotime("Jan 01 2022"), strtotime("Dec 31 2023"));
    $dates[$i] = date("d.m.Y", $timestamp);
}

echo '<h4> Input dates: ' . implode(', ', $dates) . '</h4>';

for ($i = 1; $i < 5; $i++) {
    $difference = (strtotime($dates[$i]) - strtotime($dates[$i - 1])) / 3600 / 24;
    echo '<h5>' . $dates[$i] . ' - ' . $dates[$i - 1] . ' = ' . $difference . 'days</h5>';
}
// ----------------------------------------------------

echo '<b> 3. B массиве есть 10 элементов c такими ключами: type, value. 
Вывести 10 записей c type и value, записанными в каждом элементе. </b><br><br>';

$tags = array(
    0 => array('Type' => 'text', 'Value' => 'Text 1'),
    1 => array('Type' => 'radio', 'Value' => 'Radio 1'),
    2 => array('Type' => 'checkbox', 'Value' => 'Checkbox 1'),
    3 => array('Type' => 'button', 'Value' => 'Button 1'),
    4 => array('Type' => 'text', 'Value' => 'Text 2'),
    5 => array('Type' => 'text', 'Value' => 'Text 3'),
    6 => array('Type' => 'radio', 'Value' => 'Radio 2'),
    7 => array('Type' => 'radio', 'Value' => 'Radio 3'),
    8 => array('Type' => 'checkbox', 'Value' => 'Checkbox 2'),
    9 => array('Type' => 'button', 'Value' => 'Button 2'),
);

foreach ($tags as $key => $items) {
    echo '<input type="' . $items['Type'] . '" value="' . $items['Value'] . '"style="display:block">';
}
echo '<br>';
// ----------------------------------------------------

echo '<b>4. Создать массив фигур (название фигуры, координаты, цвет),
на основе массива построить страницу и на ней нарисовать фигуры c заданным цветом
и в указанном месте.</b><br>';

$figures = array(
    'circle'      => array('style' => 'border-radius: 50%', 'X' => rand(10, 550), 'Y' => rand(10, 170), 'color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255))),
    'square'      => array('style' => 'height: 40px', 'X' => rand(10, 550), 'Y' => rand(10, 170), 'color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255))),
    'squareRound' => array('style' => 'border-radius: 20%', 'X' => rand(10, 550), 'Y' => rand(10, 170), 'color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255)))
);

echo '<div style="width:600px; height:200px; position:relative; padding:15px">';
foreach ($figures as $key => $items) {
    echo '<div class="figure" style="' . $items['style'] . '; top:' . $items['Y'] . 'px; left:' . $items['X'] . 'px; background-color:' . $items['color'] . ';"></div>';
}
echo '</div>';
// ----------------------------------------------------

echo '<br><b> 5. Создать массивы: процессор, материнская плата, оперативная память, жесткий диск, блок питания. <br>
Описание элемента массива:<br>
a) Процессор: название, сокет, частота, количество ядер.<br>
b) Материнская плата: название, сокет, тип памяти.<br>
c) Оперативная память: название, тип памяти, объем памяти.<br>
d) Жесткий диск: название, тип диска, объем.<br>
e) Блок питания: название, мощность.<br>
Разработать скрипт, который будет возвращать возможные комбинации ПК. </b><br><br>';

$computer = array(
    'CPU' => array(
        1 => array('Title' => 'AMD Ryzen 7 1700X', 'Socket' => 'AM4', 'Frequency' => '3.4GHz', 'Cores' => '8'),
        2 => array('Title' => 'Intel Core i7-8700', 'Socket' => 'Socket 1151', 'Frequency' => '3.2GHz', 'Cores' => '8'),
    ),
    'MB'  => array(
        1 => array('Title' => 'MSI B450 TOMAHAWK', 'Socket' => 'AM4', 'RAM Type' => 'DDR4'),
        2 => array('Title' => 'ASRock J3455M', 'Socket' => 'Integrated CPU', 'RAM Type' => 'DDR3'),
    ),
    'RAM' => array(
        1 => array('Title' => 'Corsair DDR4 3000Mhz', 'RAM Type' => 'DDR4', 'Memory' => '8GB'),
    ),
    'HDD' => array(
        1 => array('Title' => 'Kingston SSDNow A400 TLC', 'Type' => 'SSD', 'Memory' => '240GB'),
    ),
    'PS'  => array(
        1 => array('Title' => 'CHIEFTEC Power Smart', 'Power' => '1450W'),
    )
);

$result = [];
foreach ($computer as $key => $details) {
    echo '<div style="float:left; padding:10px; background-color:' . sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255)) . ';">';

    foreach ($details as $number => $items) {
        echo '<div style="float:left; padding:10px; height:150px;">';
        foreach ($items as $position => $value) {

            if ($position === 'Title') {
                echo '<h3>' . $value . '</h3>';
            } elseif ($position === 'Frequency') {
                echo '<h5>' . $position . ': ' . $value . ', ';
            } elseif ($position === 'Cores') {
                echo $position . ': ' . $value . '</h5>';
            } else {
                echo '<h5>' . $position . ': ' . $value . '</h5>';
            }
        }
        echo '</div>';
    }
    echo '</div>';
}
echo '<div style="clear:both;"></div>';

for ($i = 1; $i <= count($computer['CPU']); $i++) {
    for ($j = 1; $j <= count($computer['MB']); $j++) {
        if (($computer['CPU'][$i]['Socket'] === $computer['MB'][$j]['Socket']) && ($computer['MB'][$j]['RAM Type'] === $computer['RAM'][1]['RAM Type'])) {
            $result['CPU'] = $computer['CPU'][$i];
            $result['MB'] = $computer['MB'][$j];
            $result['RAM'] = $computer['RAM'][1];
            $result['HDD'] = $computer['HDD'][1];
            $result['PS'] = $computer['PS'][1];
        }
    }
}
echo '<div style="float:left; padding:10px; background-color: black; color: white;">';
echo '<h1> Result: </h1>';
foreach ($result as $key => $details) {
    if ($key === 'CPU') {
        echo '<h3>' . $key . ': ' . $details['Title'] . '</h3>';
    } else {
        echo '<h5>' . $key . ': ' . $details['Title'] . '</h5>';
    }
}
echo '</div>';
echo '<div style="clear:both;"></div>';
// ----------------------------------------------------

echo '<br><b> 6. Есть массив из 3-x элементов (Header, Content, Footer), который состоит из высоты, цвета фона,
цвeтa текста. Создайте страницу на основе этого массива.</b><br>';

$page = array(
    'Header'  => array('height' => rand(50, 300), 'background-color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255)), 'color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255))),
    'Content' => array('height' => rand(50, 300), 'background-color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255)), 'color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255))),
    'Footer'  => array('height' => rand(50, 300), 'background-color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255)), 'color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255)))
);

echo '<br>';
foreach ($page as $key => $items) {
    echo '<div style=" width:100%; height:' . $items['height'] . 'px ; background-color:' . $items['background-color'] . '; color:' . $items['color'] . ';">' . $key . '</div>';
}

?>