<?php
fscanf(STDIN, "%d", $a);
$res = substr_count($a, 7);
if ($res >= 1) {
    echo('Yes').PHP_EOL;
} else {
    echo('No').PHP_EOL;
}
