<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);
if ($a + $b === $c || $a + $c === $b || $c + $b === $a) {
    echo 'Yes';
} else {
    echo 'No';
}
