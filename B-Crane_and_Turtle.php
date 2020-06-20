<?php
$num = explode(" ", trim(fgets(STDIN)));
$animals = $num[0];
$leg = $num[1];

for ($i = 0; $i <= $animals; $i++) {
    $tmp = $animals - $i;
    $a = $i * 2 + $tmp * 4;
    if ($a == $leg) {
        echo 'Yes';
        return 0;
    } else {
        $res = 'No';
    }
}

if (isset($res)) {
    echo $res;
}
