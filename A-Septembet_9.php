<?php
fscanf(STDIN, "%d", $n);
if (strpos($n, '9') !== false) {
    echo 'Yes';
} else {
    echo 'No';
}
