<?php
fscanf(STDIN, "%d %d", $H, $W);
fscanf(STDIN, "%d %d", $h, $w);
$white = ($H - $h) * ($W - $w);
echo $white.PHP_EOL;
