<?php
fscanf(STDIN, "%d", $r);
if ($r < 1200) {
    echo 'ABC';
} elseif ($r < 2800) {
    echo 'ARC';
} else {
    echo 'AGC';
}
