<?php
fscanf(STDIN, "%s %s %s", $a, $b, $c);
$s1 = strtoupper(substr($a, 0, 1));
$s2 = strtoupper(substr($b, 0, 1));
$s3 = strtoupper(substr($c, 0, 1));
echo $s1 . $s2 . $s3;
