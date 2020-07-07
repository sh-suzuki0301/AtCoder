<?php
fscanf(STDIN, "%d", $n);
$surplus = $n % 1000;
echo $surplus === 0 ? 0 : 1000 - $surplus;
