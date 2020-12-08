<?php
fscanf(STDIN, "%s %s %s", $a, $b, $c);
if (substr($a, -1) === substr($b, 0, 1) && substr($b, -1) === substr($c, 0, 1)) {
    echo 'YES';
} else {
    echo 'NO';
}
