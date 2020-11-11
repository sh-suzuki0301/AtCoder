<?php
fscanf(STDIN, '%d %d %d', $a, $b, $c);
if ($a === $b) {
    echo $c;
} elseif ($a === $c) {
    echo $b;
} else {
    echo $a;
}
