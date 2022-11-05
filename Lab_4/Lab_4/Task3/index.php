<?php
$num = 5;
for($i = 20, $sum = 0; $i <= 45; $i++) {	 

	if (fmod($i, $num) == 0){		
		$sum = $sum + $i;
	}
}

echo $sum;
?>