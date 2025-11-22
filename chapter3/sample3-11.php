<?php
$a = "PHP";
$b = "PHP";
$c = "Hello";

echo "\$a=$a \$b=$b \$c=$c<br>";

// 両方ともPHPの場合
if ($a == "PHP" && $b == "PHP") {
    echo "{$a}、{$b}ともにPHPです<br>";
}

// いずれかがPHPの場合（$aと$c）
if ($a == "PHP" && $c == "PHP") {
    echo "{$a}、{$c}のいずれかがPHPです<br>";
}

// いずれかがPHPの場合（$aまたは$c）
if ($a == "PHP" || $c == "PHP") {
    echo "{$a}、{$c}のいずれかがPHPです<br>";
}
?>
