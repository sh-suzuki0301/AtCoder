<?php
fscanf(STDIN, "%d %d", $a, $b);
$product = $a * $b;
echo $product % 2 === 0 ? 'Even' : 'Odd';
