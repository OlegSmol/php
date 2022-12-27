<?php
    // Вывести на страницу «Hello World» (echo и print).
    $string1 = "Hello";
    $string2 = "World!";

    echo "$string1 $string2";
    echo "</br>";
    echo $string1 . $string2;
    echo "</br>";
    echo "{$string1} ${string2}";
    echo "</br>";
    // echo ($string1, "",  $string2);
    echo "</br>";
    echo $string1, " ",  $string2;
    echo "</br>";
    print "{$string1} {$string2}";
    echo "</br>";
    // print ($string1, " ",  $string2);
    // print $string1, " ",  $string2;
?>

<h1 style="color: <?="red"?>">
    <?="Test Echo"?>
</h1>

<?php 
    echo htmlentities("Hello World. \"It's my page!\"")
?>

