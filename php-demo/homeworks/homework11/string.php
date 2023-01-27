<?php

function search($str, $symbol)
{
    return substr_count($str, $symbol);
}

function change($text, $sym1, $sym2)
{
    return strtr($text, $sym1, $sym2);
}

function reverse($text)
{
    return strrev($text);
}

function stringArray($text)
{
    return explode(' ', $text);
}

function language($word)
{
    if (preg_match('/[a-z]/i', $word)) {
        return "Latin";
    } else {
        return "Cyrillic";
    }
}

?>