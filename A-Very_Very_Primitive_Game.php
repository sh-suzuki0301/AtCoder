<?php
fscanf(STDIN, "%d %d %D", $a, $b, $c);

if (($a > $b && $c === 0) || ($a > $b && $c === 1) || ($a === $b && $c === 1)) {
    echo 'Takahashi';
} else {
    echo 'Aoki';
}
