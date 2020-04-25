<?php
fscanf(STDIN, "%s %s", $S, $T);
fscanf(STDIN, "%d %d", $A, $B);
fscanf(STDIN, "%s", $U);

switch ($U) {
    case $S:
        echo(($A -1)." ".$B).PHP_EOL;
        break;
    case $T:
        echo($A." ".($B - 1)).PHP_EOL;
        break;
}
