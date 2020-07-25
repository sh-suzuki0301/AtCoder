<?php
fscanf(STDIN, "%s", $s);
$plus = substr_count($s, '+');
$minus = substr_count($s, '-');
echo $plus - $minus;
