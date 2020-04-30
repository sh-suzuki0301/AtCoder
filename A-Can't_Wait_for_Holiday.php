<?php
fscanf(STDIN, "%s", $S);
if ($S === 'SUN') {
    echo(7).PHP_EOL;
} elseif ($S === 'MON') {
    echo(6).PHP_EOL;
} elseif ($S === 'TUE') {
    echo(5).PHP_EOL;
} elseif ($S === 'WED') {
    echo(4).PHP_EOL;
} elseif ($S === 'THU') {
    echo(3).PHP_EOL;
} elseif ($S === 'FRI') {
    echo(2).PHP_EOL;
} elseif ($S === 'SAT') {
    echo(1).PHP_EOL;
}
