<form action="" method="get">
    <input type="text" name="name" placeholder="Введите имя">
    <input type="text" name="age" placeholder="Введите возраст">
    <textarea name="text" id="" cols="30" rows="10" placeholder="Введите сообщение"></textarea>
    <input type="submit">
</form>
<?php
if (isset($_REQUEST['name']) and isset($_REQUEST['age']) and isset($_REQUEST['text'])) {
    $name = strip_tags($_REQUEST['name']);
    $age = strip_tags($_REQUEST['age']);
    $text = strip_tags($_REQUEST['text']);
    echo 'Hello, ' . $name . ', ' . $age . '<br>Your message: ' . $text;
}
?> 