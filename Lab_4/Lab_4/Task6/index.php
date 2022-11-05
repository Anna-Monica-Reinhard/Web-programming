
<?php
echo '
<form method="POST">
<input type="text" name="card" value="" placeholder="введите значение">
<input type="submit" value="проверить">
</form>
';
$showcart = [
'6' => 'Шестёрка',
'7' => 'Семёрка',
'8' => 'Восьмёрка',
'9' => 'Девятка',
'10' => 'Дестяка',
'11' => 'Валет',
'12' => 'Дама',
'13' => 'Король',
'14' => 'Туз'
];
$card = $_POST['card'];
if (is_numeric($card) && $card >= 6 && $card <= 14)
{
$carta = $card;
echo $showcart[$carta];
}
else
{
echo "введите коректное число";
}

?>