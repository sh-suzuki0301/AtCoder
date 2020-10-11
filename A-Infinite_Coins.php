<?php
fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d", $a);
$surplus = $n % 500;
echo $surplus <= $a ? 'Yes' : 'No';
