<?php
fscanf(STDIN, "%d %d %d %d", $A, $B, $C, $D);
$X = ceil($A / $D);
$Y = ceil($C / $B);
echo ($X >= $Y) ? 'Yes' : 'No';
