<?php
fscanf(STDIN, "%s %s", $x, $y);
$hex = array(
    'A' => '10',
    'B' => '11',
    'C' => '12',
    'D' => '13',
    'E' => '14',
    'F' => '15',
);

if ($hex[$x] > $hex[$y]) {
    echo '>';
} elseif ($hex[$x] === $hex[$y]) {
    echo '=';
} else {
    echo '<';
}
