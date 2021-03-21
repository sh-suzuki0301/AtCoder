<?php
fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $b);
fscanf(STDIN, "%d", $n);

for ($i = $n; true; $i++) {
    if ($i % $a === 0 && $i % $b === 0) {
        echo $i;
        break;
    }
}
echo PHP_EOL;
