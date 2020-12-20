<?php
fscanf(STDIN, "%d", $n);
$total = 800 * $n;
$dicount = floor($n /15) * 200;
echo $total - $dicount;
