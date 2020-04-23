<?php
fscanf(STDIN, "%d %d", $N, $R);
if ($N >= 10) {
    echo($R).PHP_EOL;
} else {
    $ans = $R + (100 * (10 - $N));
    echo $ans.PHP_EOL;
}
