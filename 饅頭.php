<?php
fscanf(STDIN, "%s", $s);
if ($s[0] === $s[1] && $s[1] === $s[2] && $s[2] === $s[0]) {
    echo "Won";
} else {
    echo "Lost";
}
