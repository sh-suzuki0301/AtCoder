<?php
fscanf(STDIN, "%d %d", $a, $b);
if ($a % 3===0 || $b % 3 === 0 ||($a + $b) % 3 === 0) {
    echo 'Possible';
} else {
    echo 'Impossible';
}
