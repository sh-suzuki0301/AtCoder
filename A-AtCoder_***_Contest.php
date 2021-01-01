<?php
fscanf(STDIN, "%s %s %s", $a, $b, $c);
$first = substr($a, 0, 1);
$second = substr($b, 0, 1);
$third = substr($c, 0, 1);
echo $first . $second . $third;
