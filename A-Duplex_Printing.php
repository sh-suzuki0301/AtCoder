<?php
fscanf(STDIN, "%d", $a);
if ($a <= 2) {
    echo(1).PHP_EOL;
} else {
    echo ceil($a/2).PHP_EOL;
}
