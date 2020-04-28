<?php
fscanf(STDIN, "%d %d", $K, $X);
$sum = $K * 500;
$ans = $sum >= $X ? 'Yes' : 'No';
echo($ans).PHP_EOL;
