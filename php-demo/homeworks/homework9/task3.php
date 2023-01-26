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

    .blue {
        position: absolute;
        width: 30px;
        height: 30px;
        background-color: blue;
    }
</style>

<?php
echo '<br><b> 3. Разработать функцию, которая будет генерировать координаты div случайными числами, 
вывести 10 div c помощью этой функции не используя циклы (рекурсивно). </b><br>';

function coord($count)
{
    if ($count < 10) {
        $count += 1;
        return
            '<div class="blue" style="top:' . random_int(200, 600) . 'px; left:' . random_int(100, 500) . 'px;"></div>' . coord($count);
    }
}

$count = 0;
echo coord($count);

?>

<p><a href="task4.php">Next</a></p>