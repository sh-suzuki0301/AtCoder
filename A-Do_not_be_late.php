<?php
fscanf(STDIN, "%d %d %d", $d, $t, $s);
$time = $d / $s;
echo $time <= $t ? 'Yes' : "No";
