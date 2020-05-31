<?php
fscanf(STDIN, "%d", $n);
$sum = 0;
for ($i = 0; $i <= $n; $i++) {
    if ($i % 3 === 0 && $i % 5 ===0) {
        $sum += 0;
    } elseif ($i % 3 === 0) {
        $sum += 0;
    } elseif ($i % 5 === 0) {
        $sum += 0;
    } else {
        $sum += $i;
    }
}
echo $sum.PHP_EOL;
