<?php
echo '<b> 2. Вывести на страницу текстовое поле, кнопку и список стран. Пользователь вводит текст в поле,
нажимает кнопку и в списке выводятся только те страны, которые удовлетворяют условию поиска 
(строка поиска в результатах выделяется жирным и окрашена в красный). </b> <br><br>';

?>

<form>
    <input name="country" type="text" value="">
    <input type="submit" value="Submit" />
</form>

<?php
$data = file_get_contents("http://country.io/names.json");
$countries = json_decode($data, true);

if (isset($_GET["country"])) {
    $search = strtolower($_GET["country"]);

    echo '<ul>';
    foreach ($countries as $key => $country) {
        if (strpos(strtolower($country), $search) !== false) {
            echo '<li>' . substr_replace(
                $country, '<span style="color:red;">' . $search . '</span>',
                strpos(strtolower($country), $search),
                strlen($search)
            ) . '</li>';
        }
    }
    echo '</ul>';
    
} else {
    echo '<ul>';
    foreach ($countries as $key => $country) {
        echo '<li>' . $country . '</li>';
    }
    echo '</ul>';
}

?>

<p><a href="task3-4.php">Next</a></p>