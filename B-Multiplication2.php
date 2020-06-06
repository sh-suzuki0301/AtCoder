<?php
fscanf(STDIN, "%d", $n);
$list = explode(" ", trim(fgets(STDIN)));
$result = array_product($list);
if (in_array(0, $list)) {
    echo 0;
} elseif ($result > pow(10, 18)) {
    echo -1;
} else {
    echo $result;
}
