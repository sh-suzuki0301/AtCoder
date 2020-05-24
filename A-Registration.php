<?php
fscanf(STDIN, "%s", $s);
fscanf(STDIN, "%s", $t);
if ($s === substr($t, 0, -1)) {
     echo 'Yes'.PHP_EOL;
} else {
     echo 'No'.PHP_EOL;
}
