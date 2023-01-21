
<style>
    td{
        width: 50px;
        height: 50px;
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
echo '<br> 5. Разработать функцию вывода таблицы (параметры:
количество строк, количество столбцов, ширина столбца, высота столбца).<br>';

$numLines = rand(3, 9);
$numColumns = rand(3, 9);
$width = rand(50, 100);
$height = rand(10, 25);

function tableOutput($numLines, $numColumns) {
    $tab = '';
    for($i = 0; $i < $numLines; $i++){
        $tab .='<tr>';
        for($j = 0; $j < $numColumns; $j++){
            $tab .='<td></td>';
        }
        $tab .='</tr>';      
    }
    return $tab;
}
?>

<table border="1">
<p><?= tableOutput($numLines, $numColumns) ?></p>
</table>

<p><a href="task6.php">Next</a></p>