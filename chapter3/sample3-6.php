<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "PHP動作テスト<br>";

$a = 9;
echo "{$a}の値による処理の分岐NO2<br>";

if ($a == 10) {
    echo "{$a}の値は10です。";
    //日本語と変数を繋げる時は必ず {} を使う
} else {
    echo "{$a}の値は10ではありません。";
}
?>
