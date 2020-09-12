<?php
fscanf(STDIN, "%d %d %d", $d, $t, $s);
$time = $d / $s;
if ($time <= $t) {
    echo 'Yes';
} else {
    echo 'No';
}
