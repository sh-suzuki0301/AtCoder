<?php
fscanf(STDIN, "%d", $x);
$rem = $x % 100;

if ($x >= 100) {
    echo 100 - $rem;
} else {
    echo 100 - $x;
}
