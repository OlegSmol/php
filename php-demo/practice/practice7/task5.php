<?php
echo '<b> 5. Разработать форму Contact Us. B форме есть поля name, phone, message, и кнопка send. 
По клику на кнопке контент формы отображается в блоке ' . htmlspecialchars('<div>') . 'под формой. </b> <br><br>';

?>

<form action="">
    <input type="text" name="name" value="" placeholder="Name"/><br>
    <input type="tel" name="tel" value="" placeholder="Phone"/><br>
    <textarea name="message" cols="21" rows="5" placeholder="Message"></textarea><br>
    <button type="submit" name="reg" value="reg">Send</button>
</form>

<?php

if (isset($_GET["name"]) && isset($_GET["tel"]) && isset($_GET["message"])) {
    echo '<p>From: ' . $_REQUEST["name"] . '</p>';
    echo '<p>Phone: ' . $_REQUEST["tel"] . '</p>';
    echo '<p>Message: ' . $_REQUEST["message"] . '</p>';
}

?>

<p><a href="index.php">Menu</a></p>