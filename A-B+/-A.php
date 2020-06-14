<?php
fscanf(STDIN, "%d %d", $a, $b);
if ($b % $a === 0) {
    echo($a + $b).PHP_EOL;
} else {
    echo($b -$a).PHP_EOL;
}
