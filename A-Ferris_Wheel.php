<?php
fscanf(STDIN, "%d %d", $a, $b);
if ($a >= 13) {
    echo $b.PHP_EOL;
} elseif ($a >= 6 && $a <= 12) {
    echo($b /2).PHP_EOL; 
} else {
    echo(0).PHP_EOL;
}