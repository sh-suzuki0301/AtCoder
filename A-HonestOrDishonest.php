<?php
fscanf(STDIN, "%s %s", $a, $b);
if ($a === "H" && $b === "H") {
    echo "H";
} elseif ($a === "H" && $b === "D") {
    echo "D";
} elseif ($a === "D" && $b === "H") {
    echo "D";
} elseif ($a === "D" && $b === "D") {
    echo "H";
}
