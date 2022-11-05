<?php 
function getCount($hash, $needle)
{
    $array = str_split($hash);
    $count = array_count_values($array);
    echo $count[$needle];
}
 
getCount('442158755745', 5);
?>
    