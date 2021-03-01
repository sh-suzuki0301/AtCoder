<?php
fscanf(STDIN, "%d %d", $A, $B);

if ($A < 10 && $B <10) {
    echo($A * $B).PHP_EOL;
} else {
    echo(-1).PHP_EOL;
}
