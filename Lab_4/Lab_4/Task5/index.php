<?php
function getShort($str)
{
    $names = explode(' ', $str);
    list($first, $second, $third) = $names;
    $second = getLastWithDot($second);
    $third = getLastWithDot($third);
    return implode(' ', [$first, $second, $third]);
}
 
function getLastWithDot($str)
{
    return mb_substr($str, 0, 1) . '.';
}
 
echo getShort('Иванов Иван Петрович');
 ?>