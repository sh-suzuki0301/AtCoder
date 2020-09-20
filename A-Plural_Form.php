<?php
fscanf(STDIN, "%s", $s);
$end = substr($s, -1);
echo $end === "s" ? "${s}es" : "${s}s";
