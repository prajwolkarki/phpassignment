<?php

$number = 5;
$rows = 10;
echo "Multiplication Table for $number:\n";
for ($i = 1; $i <= $rows; $i++) {
    $result = $number * $i;
    echo "$number x $i = $result\n";
}
?>
