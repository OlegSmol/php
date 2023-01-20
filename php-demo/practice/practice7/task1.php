<?php

echo '<b> 1. Вывести на страницу текстовое поле и кнопку. По клику на кнопке страница 
обновляется и под текстовым полем отображается то, что пользователь ввел в текстовое поле.</b> <br><br>';
?>

<form>
    <input name="example" type="text" value="" />
    <input type="submit" value="Submit" />
</form>

<?php

if (isset($_GET["example"])) {
    echo '<p>' . $_REQUEST["example"] . '</p>';
}

?>

<p><a href="task2.php">Next</a></p>