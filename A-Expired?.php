<?php
fscanf(STDIN, "%d %d %d", $x, $a, $b);
if ($a >= $b) {
    echo 'delicious';
} elseif ($b <= $a + $x) {
    echo 'safe';
} else {
    echo 'dangerous';
}
