<form action="" method="get">
        <input name="age" placeholder="Введите ваш возраст">
        <input type="submit">
    </form>
    <?php
if (isset($_REQUEST['age'])) {
    $age = $_REQUEST['age'];
    echo $age;
}
 
if (!isset($_REQUEST['age'])):
    ?>
<?php endif; ?>