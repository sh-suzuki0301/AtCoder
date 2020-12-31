<?php
fscanf(STDIN, "%s", $c);
if ($c === 'a' || $c === 'e' || $c === 'i' || $c === 'o' || $c === 'u') {
    echo 'vowel';
} else {
    echo 'consonant';
}
