<?php
fscanf(STDIN, "%s", $a);
if (ctype_upper($a)) {
    echo 'A';
} else {
    echo 'a';
}
