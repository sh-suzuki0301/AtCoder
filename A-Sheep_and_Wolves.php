<?php
fscanf(STDIN, "%s %s", $S, $W);
if ($S <= $W) {
    echo("unsafe").PHP_EOL;
} else {
    echo("safe").PHP_EOL;
}
