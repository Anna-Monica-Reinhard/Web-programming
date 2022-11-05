<form action="" method="get">
    <input type="text" name="name" placeholder="Введите имя">
    <input type="submit">
</form>
<?php
if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo 'Hello, ' . $name;
}
?>
