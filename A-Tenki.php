<?php
fscanf(STDIN, '%s', $S);
fscanf(STDIN, '%s', $N);
$ans = 0;
if ($S[0] === $N[0]) $ans++;
if ($S[1] === $N[1]) $ans++;
if ($S[2] === $N[2]) $ans++;
echo($ans).PHP_EOL;
