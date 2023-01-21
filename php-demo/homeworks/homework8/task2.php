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

    .el1 {
        color: blue;
        padding: 20px;
        background-color: green;
    }

    .el2 {
        color: red;
        padding: 20px;
        background-color: yellow;
    }

    .el3 {
        color: orange;
        padding: 20px;
        background-color: blueviolet;
    }
</style>

<?php

echo '<br><b> 2. Разработать функцию вывода HTML-элемента, которая на входе принимает название тега
и класс стилей и строит на странице соответствующий элемент. </b><br><br>';
?>

<form action="">
    <input type="text" name="tag" placeholder="Тег">
    <input type="text" name="class" placeholder="Класс (el1, el2 или el3)"> <br>
    <br><input type="submit" value="Показать результат">
</form>

<?php

if (isset($_GET['tag']) && isset($_GET['class'])) {
    $tag = $_GET['tag'];
    $class = $_GET['class'];

    echo element($tag, $class);
}

function element($tag, $class)
{
    return '<' . $tag . ' class="' . $class . '">' . $class . '</' . $tag . '>';
}
?>

<p><a href="task3.php">Next</a></p>