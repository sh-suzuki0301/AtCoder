<?php
fscanf(STDIN, "%s", $S);
echo($S[0] === $S[1] || $S[1] === $S[2] || $S[2] === $S[3]) ? 'Bad' : 'Good';
