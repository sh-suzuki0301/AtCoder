<?php
fscanf(STDIN, "%d %d", $A, $B);
$ans = $A - ($B * 2);
if ($ans >= 0) {
    echo($ans).PHP_EOL;
} elseif ($ans < 0) {
    echo(0).PHP_EOL;
}
