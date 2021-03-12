<?php
fscanf(STDIN, "%d %d", $m, $h);
echo $h % $m === 0 ? 'Yes' : 'No';
