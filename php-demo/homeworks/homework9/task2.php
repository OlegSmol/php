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
</style>

<?php

echo '<br><b> 2. Разработать функцию, которая будет конвертировать число в текст 
(4532 — четыре тысячи пятьсот тридцать два). Ha входе функция принимает число, на выходе
возвращает результирующую строку. </b><br>';

function numberText($number)
{
    $number = (string) $number;
    $text = '';

    switch ($number[0]) {
        case 0:
            $text .= "";
            break;
        case 1:
            $text .= "One thousand, ";
            break;
        case 2:
            $text .= "Two thousand, ";
            break;
        case 3:
            $text .= "Three thousand, ";
            break;
        case 4:
            $text .= "Four thousand, ";
            break;
        case 5:
            $text .= "Five thousand, ";
            break;
        case 6:
            $text .= "Six thousand, ";
            break;
        case 7:
            $text .= "Seven thousand, ";
            break;
        case 8:
            $text .= "Eight thousand, ";
            break;
        case 9:
            $text .= "Nine thousand, ";
            break;
    }

    switch ($number[1]) {
        case 0:
            $text .= "";
            break;
        case 1:
            $text .= "one hundred ";
            break;
        case 2:
            $text .= "two hundred ";
            break;
        case 3:
            $text .= "three hundred ";
            break;
        case 4:
            $text .= "four hundred ";
            break;
        case 5:
            $text .= "five hundred ";
            break;
        case 6:
            $text .= "six hundred ";
            break;
        case 7:
            $text .= "seven hundred ";
            break;
        case 8:
            $text .= "eight hundred ";
            break;
        case 9:
            $text .= "nine hundred ";
            break;
    }

    if ($number[2] === "1") {

        switch ($number[3]) {
            case 1:
                $text .= 'and eleven';
                break;
            case 2:
                $text .= 'and twelve';
                break;
            case 3:
                $text .= 'and thirteen';
                break;
            case 4:
                $text .= 'and fourteen';
                break;
            case 5:
                $text .= 'and fifteen';
                break;
            case 6:
                $text .= 'and sixteen';
                break;
            case 7:
                $text .= 'and seventeen';
                break;
            case 8:
                $text .= 'and eighteen';
                break;
            case 9:
                $text .= 'and nineteen';
                break;
            case 0:
                $text .= 'and ten';
                break;
        }

    } else if ($number[2] === "0") {

        switch ($number[3]) {
            case 1:
                $text .= 'and one';
                break;
            case 2:
                $text .= 'and two';
                break;
            case 3:
                $text .= 'and three';
                break;
            case 4:
                $text .= 'and four';
                break;
            case 5:
                $text .= 'and five';
                break;
            case 6:
                $text .= 'and six';
                break;
            case 7:
                $text .= 'and seven';
                break;
            case 8:
                $text .= 'and eight';
                break;
            case 9:
                $text .= 'and nine';
                break;
            case 0:
                $text .= '';
                break;
        }

    } else {
        switch ($number[2]) {
            case 2:
                $text .= 'and twenty';
                break;
            case 3:
                $text .= 'and thirty';
                break;
            case 4:
                $text .= 'and forty';
                break;
            case 5:
                $text .= 'and fifty';
                break;
            case 6:
                $text .= 'and sixty';
                break;
            case 7:
                $text .= 'and seventy';
                break;
            case 8:
                $text .= 'and eighty';
                break;
            case 9:
                $text .= 'and ninety';
                break;
        }

        switch ($number[3]) {
            case 1:
                $text .= '-one';
                break;
            case 2:
                $text .= '-two';
                break;
            case 3:
                $text .= '-three';
                break;
            case 4:
                $text .= '-four';
                break;
            case 5:
                $text .= '-five';
                break;
            case 6:
                $text .= '-six';
                break;
            case 7:
                $text .= '-seven';
                break;
            case 8:
                $text .= '-eight';
                break;
            case 9:
                $text .= '-nine';
                break;
            case 0:
                $text .= '';
                break;
        }      
    }
return $text;
}

$number = random_int(1000, 9999);

?>

<p>
    <?= $number ?> - <?= numberText($number) ?>
</p>

<p><a href="task3.php">Next</a></p>