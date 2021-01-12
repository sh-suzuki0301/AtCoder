<?php
fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d", $k);
fscanf(STDIN, "%d", $x);
fscanf(STDIN, "%d", $y);

$diff = $n - $k;
if ($diff >= 1) {
    echo ($k * $x) + ($diff * $y);
} else {
    echo $n * $x;
}
