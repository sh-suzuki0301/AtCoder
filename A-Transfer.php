<?php
fscanf(STDIN, "%d %d %d", $A, $B, $C);
$capacity = $A -$B;
$remain = $C - $capacity;
if ($remain > 0) {
    echo($remain).PHP_EOL;
} else {
    echo(0).PHP_EOL;
}
