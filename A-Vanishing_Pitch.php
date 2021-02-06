<?php
fscanf(STDIN, "%d %d %d %d", $v, $t, $s, $d);
$arrival = $d / $v;
if ($arrival >= $t && $arrival <= $s) {
    echo "No";
} else {
    echo "Yes";
}
