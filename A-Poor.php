<?php
function isPoor()
{
    fscanf(STDIN, "%d %d %d", $a, $b, $c);
    if ($a === $b && $b === $c && $a === $c) {
        return true;
    }

    if ($a !== $b && $b !== $c && $a !== $c) {
        return true;
    }

    return false;
}

if (isPoor()) {
    echo("No").PHP_EOL;
} else {
    echo("Yes").PHP_EOL;
}
