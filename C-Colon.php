<?php
fscanf(STDIN, '%d %d %d %d', $a, $b, $h, $m);
$y = $m / 60;
$x = ($h + $y) / 12;
$rad = deg2rad(($x - $y) * 360);
$ans = sqrt($a ** 2 + $b ** 2 - 2 * $a * $b * cos($rad));
echo $ans;
