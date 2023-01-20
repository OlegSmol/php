<style>

span{
    color: red;
}

.error{
    border: 1px solid red;
}

</style>

<?php

$errorLogin = '';
$errorPass = '';
$errorConfirm = '';
$errorEmail = '';
$errorPhone = '';

if (isset($_GET["login"]) && isset($_GET["password"]) && isset($_GET["confirmPassword"]) && isset($_GET["email"]) && isset($_GET["phone"])) {

    if (strlen($_GET["login"]) < 6) {
        $errorLogin = 'Логин слишком короткий';
    }

    if (strlen($_GET["password"]) < 8) {
        $errorPass = 'Пароль слишком короткий';
    }

    if ($_GET["password"] !== $_GET["confirmPassword"]) {
        $errorConfirm = 'Подтверждение пароля не совпадает';
    }

    if (strpos($_GET["email"], '@') === false || strpos($_GET["email"], '.') === false) {
        $errorEmail = 'Некорректно введен почтовый адрес';
    }

    if (strlen($_GET["phone"]) < 11) {
        $errorPhone = 'Некорректно введен номер телефона';
    }
}

?>

<form action="">
    <input class="<?php if ($errorLogin !== '') echo 'error'; ?>" type="text" name="login" value="" placeholder="Login"/><span> <?= $errorLogin ?> </span><br>
    <input class="<?php if ($errorPass !== '') echo 'error'; ?>" type="password" name="password" value="" placeholder="Password"/><span> <?= $errorPass ?> </span><br>
    <input class="<?php if ($errorConfirm !== '') echo 'error'; ?>" type="password" name="confirmPassword" value="" placeholder="Confirm Password"/><span> <?= $errorConfirm ?> </span><br>
    <input class="<?php if ($errorEmail !== '') echo 'error'; ?>" type="text" name="email" value="" placeholder="Email"/><span> <?= $errorEmail ?> </span><br>
    <input class="<?php if ($errorPhone !== '') echo 'error'; ?>" type="text" name="phone" value="" placeholder="Phone"/><span> <?= $errorPhone ?> </span><br>
    <button type="submit" value="login">Register</button>
</form>