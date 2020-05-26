<?php
fscanf(STDIN, "%d", $a);
$length = strlen($a);
$last = substr($a, ($length -1), 1);
switch ($last) {
    case 2:
    case 4:
    case 5:
    case 7:
    case 9:
        echo 'hon'.PHP_EOL;
        break;
    case 0:
    case 1:
    case 6:
    case 8:
        echo 'pon'.PHP_EOL;
        break;
    case 3:
        echo 'bon'.PHP_EOL;
        break;
}
