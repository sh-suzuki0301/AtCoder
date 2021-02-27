<?php
fscanf(STDIN, "%d %d", $A, $B);
$add = $A + $B;
$sub = $A - $B;
$mul = $A * $B;
$array = [$add, $sub, $mul];

echo max($array);
