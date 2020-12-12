<?php
fscanf(STDIN, "%d %d", $a, $b);
if ($a + $b < 24) {
    echo $a + $b;
} else {
    echo ($a + $b) - 24;
}
