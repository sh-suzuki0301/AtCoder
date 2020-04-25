<?php
fscanf(STDIN, "%d %d", $N, $M);
$ans = $N * (($N -1) / 2) + $M * (($M -1) / 2);
echo $ans.PHP_EOL;
