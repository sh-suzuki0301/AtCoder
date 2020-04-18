<?php
fscanf(STDIN, "%d %d", $a, $b);
$res = $a * $b;

if ($res % 2 === 0) {
    echo('Even'."\n");
} else {
    echo('Odd'."\n");
}
