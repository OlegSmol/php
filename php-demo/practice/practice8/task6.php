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

echo '<br> 6. Разработать рекурсивную функцию, которая на входе принимает число, выводит его
и уменьшает на единицу. Функция работает до тех пор, пока число больше 0.<br>';

$number = rand(1, 20);

function numbers($number) {
if ($number > 0) {
    return '<span style="padding: 20px">' . $number . '</span>' . numbers($number - 1);
}
}
echo '<br>' . numbers($number);

?>

<p><a href="index.php">Main page</a></p>