<?php

$rows = 5;
$columns = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $columns; $j++) {

        echo ($i * $j) . "\t";
    }
    
    echo "\n";
}
?>
