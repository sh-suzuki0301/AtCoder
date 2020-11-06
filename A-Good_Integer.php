<?php
$s = str_split(trim(fgets(STDIN)));
$front = array_slice($s, 0, 3);
$back = array_slice($s, 1, 3);
$front = array_unique($front);
$back = array_unique($back);

if (count($front) == 1 || count($back)  == 1) {
    echo 'Yes';
} else {
    echo 'No';
}
