<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);
echo ($a * $b) * 2 + ($b * $c) * 2 + ($c * $a) * 2;
