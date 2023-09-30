<?php
function isRightTriangle($a, $b, $c)
{
    $sides = [$a, $b, $c];
    sort($sides);
    return ($sides[0] * $sides[0] + $sides[1] * $sides[1] ==
        $sides[2] * $sides[2]);
}
$a = 3;
$b = 4;
$c = 5;
if (isRightTriangle($a, $b, $c)) {
    echo "Yes, it forms a right triangle.\n";
} else {
    echo "No, it does not form a right triangle.\n";
}
