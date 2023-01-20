<?php

$login = 'UserName';
$password = 'UserPass';

if ($_REQUEST["login"] === $login && $_REQUEST["password"] === $password) {
    echo '<h1> Hello </h1>';
}

else {
    echo '<p> Some errors. Please try again or ' . '<a href="register3-4.php">register</a> <p>';
}

?>