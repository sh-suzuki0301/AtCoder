<?php
fscanf(STDIN, "%s", $b);
switch ($b) {
    case 'A':
        echo 'T';
        break;
    case 'T':
        echo 'A';
        break;
    case 'C':
        echo 'G';
        break;
    case 'G':
        echo 'C';
        break;
}
