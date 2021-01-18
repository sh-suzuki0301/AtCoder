<?php
fscanf(STDIN, "%d %d", $n, $x);
echo min($n - $x, $x - 1);
