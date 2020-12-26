<?php
fscanf(STDIN, "%d %d", $a, $b);
if ($a === 1) {
    $a += 13;
}
if ($b === 1) {
    $b += 13;
}
if ($a > $b) {
    echo 'Alice';
} elseif ($a < $b) {
    echo 'Bob';
} else {
    echo 'Draw';
}
