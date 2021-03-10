<?php
fscanf(STDIN, "%d %d", $a, $b);
$solids = $a + $b;
if ($solids >= 15 && $b >= 8) {
    echo '1';
} elseif ($solids >= 10 && $b >= 3) {
    echo '2';
} elseif ($solids >= 3) {
    echo '3';
} else {
    echo '4';
}
