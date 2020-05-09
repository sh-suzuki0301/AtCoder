<?php
fscanf(STDIN, "%s", $S);
$a = str_split($S);
sort($a);
echo ($a[0] === $a[1] && $a[1] != $a[2] && $a[2] === $a[3]) ? 'Yes' : "No";
