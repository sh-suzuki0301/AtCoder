<?php
fscanf(STDIN, "%d %d", $a, $b);
$follow_limit = 2 * $a + 100;
echo $follow_limit - $b;
