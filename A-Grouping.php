<?php
fscanf(STDIN, "%d %d", $x, $y);
$group_1 = array(1,3,5,7,8,10,12);
$group_2 = array(4,6,9,11);
$group_3 = array(2);

if (in_array($x, $group_1) && in_array($y, $group_1)) {
    echo 'Yes';
} elseif (in_array($x, $group_2) && in_array($y, $group_2)) {
    echo 'Yes';
} elseif (in_array($x, $group_3) && in_array($y, $group_3)) {
    echo 'Yes';
} else {
    echo 'No';
}
