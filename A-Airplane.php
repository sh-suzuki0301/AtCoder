<?php
fscanf(STDIN, "%d %d %d", $P, $Q, $R);
echo $P + $Q + $R - max($P, $Q, $R).PHP_EOL;
