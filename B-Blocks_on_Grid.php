<?php
fscanf(STDIN, "%d%d", $h, $w);
$list = array();
for ($i=0; $i < $h; $i++) {
    $list = array_merge($list, explode(" ", trim(fgets(STDIN))));
}

sort($list);

$min = $list[0];
$ans = 0;
foreach ($list as $v) {
    $ans += $v - $min;
}

echo $ans;
