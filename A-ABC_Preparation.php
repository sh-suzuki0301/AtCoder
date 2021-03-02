<?php
$list = array_map('intval', explode(' ', fgets(STDIN)));

echo min($list);
