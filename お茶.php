<?php
fscanf(STDIN, "%s", $s);
echo substr($s, -1) === "T" ? 'YES' : 'NO'.PHP_EOL;
