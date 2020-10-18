<?php
fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $d);

$L = $a + $b;
$R = $c + $d;

if ($L > $R) {
    echo "Left";
} elseif ($L === $R) {
    echo "Balanced";
} elseif ($R > $L) {
    echo "Right";
}
