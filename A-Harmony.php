<?php
fscanf(STDIN, "%d %d", $A, $B);
echo (($A + $B) % 2 != 0) ? 'IMPOSSIBLE' : ($A + $B) / 2;
