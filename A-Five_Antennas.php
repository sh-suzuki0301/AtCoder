<?php
fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $b);
fscanf(STDIN, "%d", $c);
fscanf(STDIN, "%d", $d);
fscanf(STDIN, "%d", $e);
fscanf(STDIN, "%d", $k);

echo ($e - $a <= $k) ? 'Yay!' : ':(';
