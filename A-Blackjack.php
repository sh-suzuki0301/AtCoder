<?php
fscanf(STDIN, "%d %d %d", $A1, $A2, $A3);
$sum = $A1 + $A2 + $A3;
if ($sum >= 22) {
    echo('bust').PHP_EOL;
} else {
    echo('win').PHP_EOL;
}
