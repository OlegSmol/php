<style>
    .few {
        color: blue;
        font-size: 20px;
    }

    .one {
        color: red;
        font-size: 20px;
    }

    img{
        width: 100px;
    }
</style>

<?php
echo '<b> 1. Создать массив из 10 элементов (чисел). Вывести:<br>
a) четные элементы;<br>
b) максимальный и минимальный элемент;<br>
c) отсортировать массив по возрастанию.</b><br>';

$arr1 = [];
for ($i = 0; $i < 10; $i++) {
    $arr1[$i] = rand(1, 20);
}
echo '<h2> Array: ' . implode(',', $arr1) . '</h2>';

$arrEven = [];
$max = $arr1[0];
$min = $arr1[0];
foreach ($arr1 as $i => $value) {
    if ($value % 2 == 0) {
        $arrEven[] = $value;
    }
    if ($value > $max) {
        $max = $value;
    }
    if ($value < $min) {
        $min = $value;
    }
}
echo '<h2> Even: ' . implode(',', $arrEven) . '</h2>';

echo '<h2>MAX: ' . $max . ', MIN: ' . $min . '</h2>';

sort($arr1);
echo '<h2> Sorted array: ' . implode(',', $arr1) . '</h2>';
// ----------------------------------------------------

echo '<b> 2. Создать 2 массива c числами по 10 элементов. Создать скрипт, 
который объединит уникальные значения из двух массивов в один.</b><br/>';

$array1 = [];
$array2 = [];
$resultArray = [];

for ($i = 0; $i < 10; $i++) {
    $array1[$i] = rand(1, 20);
    $array2[$i] = rand(1, 20);
}
echo '<h2> 1 array: ' . implode(',', $array1) . '</h2>';
echo '<h2> 2 array: ' . implode(',', $array2) . '</h2>';

$newArray = array_merge($array1, $array2);

for ($i = 0; $i < count($newArray); $i++) {
    $counter = 0;
    for ($j = $i + 1; $j < count($newArray); $j++) {
        if ($newArray[$i] == $newArray[$j]) {
            $counter += 1;
        }
    }
    if ($counter == 0) {
        $resultArray[] = $newArray[$i];
    }
}
echo '<h2> Output array: ' . implode(',', $resultArray) . '</h2>';
// ----------------------------------------------------

echo '<br><b> 3. Создать массив из 10 элементов. Посчитать количество повторов каждого числа в массиве 
(цвет цифр, в которых нет повторов — красный, цвет тех чисел, в которых есть повторы — синий). 
Размер текста — 20px. Число в каждой строке выделять жирным. </b><br>';

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = rand(0, 9);
}
echo '<h2> Array: ' . implode(',', $arr) . '</h2>';

$result = array_count_values($arr);
arsort($result);
foreach ($result as $key => $value) {
    if ($value > 1) {
        echo '<p class="few"><b>' . $key . '</b> - ' . $value . '</p>';
    } else {
        echo '<p class="one"><b>' . $key . '</b> - ' . $value . '</p>';
    }
}
// ----------------------------------------------------

echo '<b>4. Создать массив фруктов (состоит из названия, типа, цены и количества).
Проделать c массивом такие действия:<br>
d) вывести только цитрусовые;<br>
e) посчитать и вывести цену фруктов;<br>
f) посчитать общую цену всех фруктов.</b><br>';

$fruits = array(
    "Orange" => array('Type' => 'Citrus', 'Price' => 20, 'Amount' => 2,),
    "Banana" => array('Type' => 'Fruit', 'Price' => 10, 'Amount' => 6),
    "Lemon"  => array('Type' => 'Citrus', 'Price' => 10, 'Amount' => 7),
    "Apple"  => array('Type' => 'Fruit', 'Price' => 15, 'Amount' => 3),
    "Kiwi"   => array('Type' => 'Fruit', 'Price' => 5, 'Amount' => 1)
);
echo '<h1 style="margin:2px;"> All </h1>';

$total = 0;

foreach ($fruits as $name => $items) {
    echo '<div style="float:left; padding:10px; background-color:green;"><h2>' . $name . '</h2>';
    $items['Total price'] = $items['Price'] * $items['Amount'];

    foreach ($items as $key => $value) {
        if ($key === 'Type') {
            echo '<h5>' . $key . ' : ' . $value . '; ';
        }
        if ($key === 'Price') {
            echo $key . ' : ' . $value . '</h5>';
        }
        if ($key === 'Amount') {
            echo '<h3>' . $key . ' : ' . $value . '</h3>';
        } else if ($key === 'Total price') {
            echo '<h6>' . $key . ' : ' . $value . '</h6>';
            $total += $value;
        }
    }
    echo '</div>';
}
echo '<div style="clear:both;"></div>';
echo '<h1 style="margin:2px;"> Citrus </h1>';

foreach ($fruits as $name => $items) {
    $items['Total price'] = $items['Price'] * $items['Amount'];
    if ($items['Type'] === 'Citrus') {
        echo '<div style="float:left; padding:10px; background-color:orange;"><h2>' . $name . '</h2>';
        foreach ($items as $key => $value) {
            if ($key === 'Type') {
                echo '<h5>' . $key . ' : ' . $value . '; ';
            }
            if ($key === 'Price') {
                echo $key . ' : ' . $value . '</h5>';
            }
            if ($key === 'Amount') {
                echo '<h3>' . $key . ' : ' . $value . '</h3>';
            } else if ($key === 'Total price') {
                echo '<h6>' . $key . ' : ' . $value . '</h6>';
            }
        }
        echo '</div>';
    }
}
echo '<div style="clear:both;"></div>';
echo '<h1 style="margin:2px;"> Total: ' . $total . '</h1>';
// ----------------------------------------------------

echo '<br><b>' . htmlspecialchars('5. Создать массив co странами и вывести <select>-элемент,
который будет включать в себя список стран.') . '</b><br>';

$data = file_get_contents("http://country.io/names.json");
$countries = json_decode($data, true);
sort($countries);

echo '<br> <select name="country">';
foreach ($countries as $key => $country) {
    echo '<option value="' . $key . '">' . $country . '</option>';
}
echo '</select> <br>';
// ----------------------------------------------------

echo '<br><b> 6. Создать массив, который будет содержать название изображения, ссылки и
альтернативный текст на следующие ресурсы: Youtube, Facebook, Google, Gmail и разработать ' .
    htmlspecialchars('<div>') . ', который будет показывать изображение и по клику на изображение 
будет перенаправлять на соответствующий сайт.</b><br><br>';

$social = array(
    "Youtube"  => array('name' => 'youtube', 'a' => 'https://www.youtube.com', 'img' => 'youtube.png',),
    "Facebook" => array('name' => 'facebook', 'a' => 'https://www.facebook.com', 'img' => 'facebook.png'),
    "Google"   => array('name' => 'google', 'a' => 'https://www.google.com', 'img' => 'google.png'),
    "Gmail"    => array('name' => 'gmail', 'a' => 'https://www.gmail.com', 'img' => 'gmail.png')
);

foreach ($social as $name => $items) {
    echo '<div style="float: left;"><a href="' . $items['a'] . '"><img src="img/' . $items['img'] . '" alt=""></a>';
}

?>