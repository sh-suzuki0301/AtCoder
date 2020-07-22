<?php
fscanf(STDIN, "%d", $n);
if ($n % 2 === 0 && $n % $n === 0) {
    echo $n;
} else {
    echo 2 * $n;
}
