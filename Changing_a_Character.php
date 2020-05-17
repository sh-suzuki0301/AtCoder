<?php
fscanf(STDIN, '%d %d', $n, $k);
fscanf(STDIN, '%s', $s);
 
$ans = '';
for($i = 0; $i < $n; $i++) {
    if ($i === $k - 1) $ans = $ans . strtolower($s[$i]);
    else $ans = $ans . $s[$i];
}
echo $ans . PHP_EOL;