<?php
list($n, $k) = explode(' ', trim(fgets(STDIN)));
$human = range(1, $n);
$have_sweets = [];
for ($i = 1; $i <= $k; ++$i) {
    list($d) = explode(' ', trim(fgets(STDIN)));
    $have_sweets = array_merge($have_sweets, explode(' ', trim(fgets(STDIN))));
}
$have_sweets = array_unique($have_sweets);
echo count(array_diff($human, $have_sweets));
