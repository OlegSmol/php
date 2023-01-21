<style>
    p {
        text-align: center;
        margin: 40px 0;
    }

    a {
        width: 160px;
        display: block;
        margin: auto;
        padding: 10px;
        text-decoration: none;
        border: 2px solid black;
        border-radius: 10px;
        color: black;
    }

    a:hover {
        background-color: beige;
        transition: .5s;
        font-weight: 900;
    }

    .item {
        color: yellow;
        padding: 30px;
        background-color: green;
        float: left;
    }

    .active {
        color: green;
        background-color: yellow;
    }

    ul{
        min-height: 100px;
    }

</style>

<?php

echo '<br><b> 3. Разработать функцию, которая строит блок меню. Ha входе функция получает массив пунктов меню.
Пункт меню состоит из текста, который будет внутри, и названия класса для стилей.</b><br>';

$points = array(
    'Home'    => 'item',
    'About'   => 'item active',
    'Contact' => 'item',
    'Photo'   => 'item',
    'Blog'    => 'item'
);

function menu($points){
    $blok = '<ul style="list-style:none;">';
    foreach ($points as $key => $value) {
        $blok .= '<li class="' . $value . '">' . $key . '</li>';
    }
    $blok .= '</ul>';
    return $blok;
}

?>

<div style="margin: 50px;"><?= menu($points) ?></div>

<p><a href="task4.php">Next</a></p>