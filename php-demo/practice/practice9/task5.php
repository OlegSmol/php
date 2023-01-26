<style>
    p {
        text-align: center;
        margin: 150px 0;
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

    img {
        width: 100px;
        height: 100px;
        float: left;
    }

</style>

<?php
echo '<br><b> 5. Разработать функцию "кубики", которая на входе не принимает никаких параметров. 
Ee задача сгенерировать 2 случайных числа от 1 до 6 и вывести на страницу 2 изображения кубиков c соответствующим
количеством точек на кубике. Ha странице сделать кнопку, по щелчку на которую выполняется функция.</b><br><br>';
?>

<form action="">
    <button type="submit" name="cub" value="">Бросить кубики</button>
</form>

<?php

if (isset($_GET["cub"])) {
    echo cubes();
}

function cubes() {
    $cub1 = random_int(1, 6);
    $cub2 = random_int(1, 6);

    return '<img src="img/' . $cub1 . '.png" alt=""> <img src="img/' . $cub2 . '.png" alt="">';
}

?>

<p><a href="index.php">Main page</a></p>