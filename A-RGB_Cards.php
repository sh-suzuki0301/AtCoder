<?php
fscanf(STDIN, "%d %d %d", $r, $g, $b);
$num = $r . $g . $b;
if ($num % 4 === 0) {
    echo 'YES';
} else {
    echo 'NO';
}
