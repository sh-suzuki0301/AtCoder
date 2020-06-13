<?php
fscanf(STDIN, "%s", $a);
$num = str_replace('/', '', $a);
echo $num <= 20190430 ? 'Heisei' : 'TBD';
