<?php
fscanf(STDIN, "%d %d %d", $n, $a, $b);
$arr = array();
$arr[] = $n * $a;
$arr[] = $b;
echo min($arr);
