<?php
fscanf(STDIN, "%s", $a);
echo substr_count($a, $a[0]) === 4 ? 'SAME' . "\n" : 'DIFFERENT' . "\n";
