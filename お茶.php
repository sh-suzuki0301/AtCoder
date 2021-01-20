<?php
fscanf(STDIN, "%s", $s);
$lastNum = strlen($s);
echo substr($s, -1) === "T" ? 'YES' : 'NO';
