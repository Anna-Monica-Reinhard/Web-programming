<?php

// 3
if(isset($_REQUEST['submit'])){
if($_REQUEST['radio'] == '1'){
echo 'Вам менее 20 лет';
}
if($_REQUEST['radio'] == '2'){
echo 'Вам 20-25 лет';
}
if($_REQUEST['radio'] == '3'){
echo 'Вам 26-30 лет';
}
if($_REQUEST['radio'] == '4'){
echo 'Вам более 30 лет';
}
}

?>

<form action="" method="post">
<p>Сколько вам лет?</p>
<input type="radio" name="radio" value="1" checked> менее 20
<input type="radio" name="radio" value="2"> 20-25
<input type="radio" name="radio" value="3"> 26-30
<input type="radio" name="radio" value="4"> более 30
<input type="submit" name="submit">
</form>