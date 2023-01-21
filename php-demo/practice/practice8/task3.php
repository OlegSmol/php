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

    a:hover{
        background-color: beige;
        transition: .5s;
        font-weight: 900;
    }

</style>

<?php
echo '<br> 3. Разработать функцию, которая при запуске страницы будет определять время дня
и заливать фон соответствующим цветом: утро — синий, день — желтый, вечер — красный, ночь — черный.<br>';

$timestamp = time();
function getColor($timestamp) {
    $hour =  date("H", $timestamp);

    return 
        $hour > 6 ? ( $hour > 12 ? ($hour > 18 ? "red" : "yellow") : "blue") : "black";
}
$color = getColor($timestamp);

?>

<style>
    
body {
    background-color: <?= $color ?>;
}  

</style>

<p><?= date("H:i:s", $timestamp)?></p>

<p><a href="task4.php">Next</a></p>