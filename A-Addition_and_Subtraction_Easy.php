<?php
fscanf(STDIN, "%d %s %d", $a, $op, $b);
echo $op === '+' ? $a + $b : $a - $b;
