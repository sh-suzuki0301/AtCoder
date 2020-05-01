<?php
fscanf(STDIN, "%d", $S);
switch ($S) {
    case 'Sunny':
        echo('Cloudy').PHP_EOL;
        break;
    case 'Cloudy':
        echo('Rainy').PHP_EOL;
        break;
    case 'Rainy':
        echo('Sunny');
        break;
}
