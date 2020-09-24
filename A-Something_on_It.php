<?php
fscanf(STDIN, "%s", $s);
$topping = substr_count($s, 'o') * 100;
if ($topping === 0) {
    echo 700;
} else {
    echo 700 + $topping;
}
