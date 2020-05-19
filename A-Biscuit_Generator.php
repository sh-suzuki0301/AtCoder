<?php
fscanf(STDIN,"%d %d %d", $a, $b, $t);
echo floor($t + 0.5 / $a) * $b.PHP_EOL;