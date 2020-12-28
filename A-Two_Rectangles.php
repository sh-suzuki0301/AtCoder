<?php
fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $d);
$arr = array($a * $b, $c * $d);
echo max($arr);
