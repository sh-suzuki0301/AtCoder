<?php
fscanf(STDIN, '%d', $benefit);
$principal = 100;
$period = 0;
while ($principal < $benefit) {
    $principal += floor($principal / 100);
    $period++;
}
echo $period.PHP_EOL;
