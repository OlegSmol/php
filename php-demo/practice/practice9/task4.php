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

    td{
        width: 50px;
        height: 50px;
        border: 1px solid grey;
        text-align: center;
    }

</style>

<?php

echo '<b> 4. Разработать функцию, которая на входе принимает массив, строит на eгo основе таблицу из тегов input и
заполняет каждый input соответствующим значением из массива. </b><br><br>';

function tagArr(&$arr){
    $tab = '<table>';
    for($i = 0; $i < 5; $i++){
        $tab .='<tr>';
        for($j = 0; $j < 5; $j++){
            $tab .='<td>' . $arr[$i][$j] . '</td>';
        }
        $tab .='</tr>';      
    }
    $tab .='</table>'; 

   return $tab; 
}

$arr = [];

for ($i = 0; $i < 5; $i++) {
    $arr[$i] = [];
    for ($j = 0; $j < 5; $j++) {
        $arr[$i][$j] = rand(10, 99);
    }
}

echo tagArr($arr);

?>

<p><a href="task5.php">Next</a></p>