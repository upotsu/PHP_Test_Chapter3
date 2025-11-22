<?php

$a = 1;
echo "{$a}による処理の分岐（switch文の場合）<br>";

switch($a){
    case 1:
        echo "{$a}の値は1です<br>";
        break;
    case 2:
        echo "{$a}の値は2です<br>";
        break;
    case 3:
        echo "{$a}の値は3です<br>";
        break;
    default:
        echo "{$a}の値は1,2,3以外の値です<br>";
        break;
}
?>
