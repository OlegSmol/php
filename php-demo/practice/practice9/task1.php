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

echo '<b> 1. Разработать функцию, которая на входе принимает контент из textarea и символ
и возвращает количество повторов этого символа в контенте textarea.</b> <br><br>';

?>

<form>
    <input type="text" name="symbol" value="">
    <br/>
    <textarea name="text"></textarea>
    <br/>
    <input type="submit" value="Submit" />
</form>

<?php
    function counter($text, $symbol) {
        return substr_count($text, $symbol);
    }

    if( isset($_REQUEST) && 
        isset($_REQUEST["symbol"]) && !empty($_REQUEST['symbol']) &&
        isset($_REQUEST["text"]) && !empty($_REQUEST['text'])
    ) {
        $count = counter($_REQUEST["text"], $_REQUEST["symbol"]);
        echo "Count symbol '".$_REQUEST["symbol"]."': $count";
    }

?>

<p><a href="task2.php">Next</a></p>