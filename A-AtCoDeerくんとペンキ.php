<?php
$arr = explode(" ", trim(fgets(STDIN)));

echo count(array_unique($arr));
