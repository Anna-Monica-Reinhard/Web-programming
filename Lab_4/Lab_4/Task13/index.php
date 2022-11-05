<form action="" method="GET">
	<p>Вы знаете PHP?</p>
	<p>да<input type="radio" name="php" value="1"></p>
	<p>нет<input type="radio" name="php" value="0"></p>
	<input type="submit">
</form>

<?php
	if (isset($_REQUEST['php']) and $_REQUEST['php'] == 0) {
		echo 'Вы не знаете PHP';
	}

	if (isset($_REQUEST['php']) and $_REQUEST['php'] == 1) {
		echo 'Вы  знаете PHP!';
	}
?>