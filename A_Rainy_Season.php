<?php
fscanf(STDIN, "%s", $str);
if ($str[0] === 'R' && $str[1] === 'R' && $str[2] === 'R') {
    echo '3';
} elseif (($str[0] === 'R' && $str[1] === 'R') || ($str[1] === 'R'&& $str[2] === 'R')) {
    echo '2';
} elseif ($str[0] === 'R' || $str[1] === 'R' || $str[2] === 'R') {
    echo '1';
} else {
    echo '0';
}
