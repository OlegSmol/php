<style>
    .fon {
        position: relative;
    }

    td {
        width: 50px;
        height: 50px;
    }

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

    .figure{
        width: 50px;
        height: 50px;
    }

    img {
        padding: 5px 15px;
        height: 45px;
    }
</style>

<?php
echo '<br><b> 5. Разработать функцию вывода шахматной фигуры на доске, которая на входе
принимает номер строки, номер столбца и название фигуры.</b><br><br>';
?>

<form action="">
    <input type="text" name="numLines" placeholder="номер строки от 1 до 8"> 
    <input type="text" name="numColumns" placeholder="номер столбца от 1 до 8"> 
    <input type="text" name="nameFigure" placeholder="название фигуры">(king, queen, elefant, horse, root, pawn) <br>
    <br><input type="submit" value="Показать результат">
</form>

<div class="fon">

    <?php
    echo '<table>';
    for ($i = 1; $i <= 8; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= 8; $j++) {
            if (($i % 2 == 1 && $j % 2 == 1) || ($i % 2 == 0 && $j % 2 == 0)) {
                echo '<td style="background-color:white"></td>';
            } else {
                echo '<td style="background-color:black"></td>';
            }
        }
        echo '</tr>';
    }
    echo '</table><br>';

    if (isset($_GET['numLines']) && isset($_GET['numColumns']) && isset($_GET['nameFigure'])) {
        $line = $_GET['numLines'] - 1;
        $column = $_GET['numColumns'] - 1;
        $figure = $_GET['nameFigure'];
        echo chess($line, $column, $figure);
    }

    function chess($line, $column, $figure)
    {
        $top = (int) $line * 52;
        $left = (int) $column * 54;
        return '<div class="figure" style="position: absolute; z-index:10; top:' . $top . 'px; left:' . $left . 'px;">
    <img src="img/' . $figure . '.png">
    </div>';
    }

    ?>

</div>

<p><a href="index.php">Main page</a></p>