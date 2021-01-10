<?php
fscanf(STDIN, "%d %d", $x, $y);
if ($x > $y) {
    if ($x < $y + 3) {
        echo 'Yes';
    } else {
        echo 'No';
    }
} else {
    if ($x + 3 > $y) {
        echo 'Yes';
    } else {
        echo 'No';
    }
}
