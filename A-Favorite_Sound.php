<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);
$count = floor($b / $a);
echo ($count >= $c) ? $c : $count;
