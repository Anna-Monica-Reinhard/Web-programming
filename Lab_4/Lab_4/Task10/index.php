<form action="" method="post">
    <input type="text" name="login" placeholder="Введите логин">
    <input type="password" name="password" placeholder="Введите пароль">
    <input type="submit">
</form>
<?php
$loginFile = 'user';
$passwordFile = 12345;
if (isset($_REQUEST['login']) and isset($_REQUEST['password'])) {
    $login = trim($_REQUEST['login']);
    $password = trim($_REQUEST['password']);
    if ($login == $loginFile and $password == $passwordFile) {
        echo 'Success';
    } else {
        echo 'False';
    }
}
?>