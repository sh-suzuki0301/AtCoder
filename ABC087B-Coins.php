<?php
fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $b);
fscanf(STDIN, "%d", $c);
fscanf(STDIN, "%d", $X);
$res = 0;
 
for ($i = 0; $i <= $a; ++$i) {
    for ($j = 0; $j <= $b; ++$j) {
        for ($k = 0; $k <= $c; ++$k) {
            if ((500 * $i) + (100 * $j) + (50 * $k) == $X) {
                ++$res;
            }
        }
    }
}
 
echo $res.PHP_EOL;
