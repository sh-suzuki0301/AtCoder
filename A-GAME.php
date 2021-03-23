<?php
fscanf(STDIN, "%d %d", $a, $d);
$array = array(($a + 1) * $d, $a * ($d + 1));
echo max($array) . PHP_EOL;
