<?php
fscanf(STDIN, "%d %d", $x, $t);
$rem = $x - $t;

echo $rem >= 0 ? $rem : 0;
