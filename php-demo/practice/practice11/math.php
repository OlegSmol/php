<?php

function sum(...$arr)
{
    // return array_reduce($arr, fn($sum, $num) => $sum + $num, 0);
    $arr = array_reduce($arr, function ($sum, $num) {
        return ($sum + $num);
    }, 0);
    return $arr;
}

function sub($a, $b)
{
    return $a - $b;
}

function mult(...$arr)
{
    // return array_reduce($arr, fn($res, $num) => $res * $num, 1);
    $arr = array_reduce($arr, function ($res, $num) {
        return ($res * $num);
    }, 1);
    return $arr;
}

function div($a, $b)
{
    return $b === 0 ? 'Null' : $a / $b;
}

function ran($a, $b)
{
    return random_int($a, $b);
}

?>