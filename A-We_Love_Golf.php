<?php
fscanf(STDIN, "%d", $k);
fscanf(STDIN, "%d %d", $a, $b);
 
for ($i = $a; $i <= $b; $i++) {
    if (($i % $k) === 0) {
        echo "OK".PHP_EOL;
        exit;
    }
}
 
echo "NG".PHP_EOL;
