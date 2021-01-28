<?php
fscanf(STDIN, "%d %d", $w, $h);
echo intdiv($w, 4) * 3 === $h ? '4:3' : '16:9';
echo PHP_EOL;
