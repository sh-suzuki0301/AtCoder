<?php
fscanf(STDIN, "%d %d %d", $a1, $a2, $a3);
$max = max($a1, $a2, $a3);
$min = min($a1, $a2, $a3);
echo $max - $min;
