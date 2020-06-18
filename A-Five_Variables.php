<?php
$arr = explode(" ", trim(fgets(STDIN)));
$res = array_search(0, $arr) + 1;
echo $res;
