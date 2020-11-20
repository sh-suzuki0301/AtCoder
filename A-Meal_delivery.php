<?php
fscanf(STDIN, "%d %d %d", $x, $a, $b);
$absA = abs($x - $a);
$absB = abs($x - $b);
if ($absA > $absB) {
    echo 'B';
} else {
    echo 'A';
}
