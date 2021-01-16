<?php
$str = trim(fgets(STDIN));
if (in_array($str, ['7 5 5', '5 7 5', '5 5 7'], true)) {
    echo "YES";
} else {
    echo "NO";
}
