<?php
fscanf(STDIN, "%d %d %d", $n, $x, $t);
$count = floor(($n + $x - 1) / $x);
echo $count * $t;
