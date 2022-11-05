
<form action="" method="POST">
	<label for="id1">Введите Ваше имя:</label>
	<input type="text" id = "id1" name="name">
	<input type="hidden" name="check" value="0">
	<input type="checkbox" name="check" value="1">
	<input type="submit" name="send">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['name'])){
	if ($_POST['check'] == 1)
		echo "Привет, ",$_POST['name'],"!";
	else
		echo "Пока, ",$_POST['name'],"!";
}
?>