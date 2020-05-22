<?php
fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $k);
if ($k <= $a) {
    echo $k.PHP_EOL;
} elseif ($k <= $a + $b) {
    echo $a.PHP_EOL;
} else {
    echo $a - ($k - $a - $b).PHP_EOL;
}
