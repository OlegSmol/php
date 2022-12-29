<style>
    tr, td {
        border: 3px double black;
    }
</style>

<?php 
$years = [];
$current = 0;

while($current < 2022) {
    if(
        ($current % 4 === 0 
        && $current % 100 !== 0 )
        || ($current % 400 === 0)
    ) {
        $years[] = $current;
    }
    $current++;
}
?>

<table>
    <tr>
    <?php
        foreach($years as $index => $year) {
            echo "<td>$year</td>";

            if($index>0 && ($index+1) % 20 === 0) {
                echo "</tr><tr>";
            }            
        }

    ?>
    </tr>
</table>