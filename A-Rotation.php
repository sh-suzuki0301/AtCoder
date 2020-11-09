<?php
$a = str_split(fgets(STDIN));
$b = str_split(fgets(STDIN));

if ($a[0] === $b[2] && $a[1] === $b[1] && $a[2] === $b[0]) {
    echo 'YES';
} else {
    echo 'NO';
}
