<?php
fscanf(STDIN, "%d %d", $a, $b);
if ($a > $b) {
    echo ($a + ($a - 1)).PHP_EOL;
} elseif ($a < $b) {
    echo ($b + ($b - 1)).PHP_EOL;
} elseif ($a == $b) {
    echo ($a + $b).PHP_EOL;
}