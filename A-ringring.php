<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);
echo min($a +$b, $b + $c, $c + $a);
