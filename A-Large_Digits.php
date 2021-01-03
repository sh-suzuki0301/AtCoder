<?php
fscanf(STDIN, "%d %d", $a, $b);
$sumA = array_sum(str_split($a, 1));
$sumB = array_sum(str_split($b, 1));
echo $sumA > $sumB ? $sumA : $sumB;
