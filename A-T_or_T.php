<?php
fscanf(STDIN, "%d %d %d", $N, $A, $B);
$train = $N * $A;
$array = [$train, $B];
echo min($array).PHP_EOL;
