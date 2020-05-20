<?php
fscanf(STDIN, "%d", $k);
fscanf(STDIN, "%s", $s);
if (strlen($s) <= $k) {
    echo $s.PHP_EOL;
} else {
    $dot = substr($s, 0, $k);
    echo $dot."...".PHP_EOL;
}