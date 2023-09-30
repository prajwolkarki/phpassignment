<?php
$boardSize = 8;

echo "<table border='1'>";

for ($row = 1; $row <= $boardSize; $row++) {
    echo "<tr>";

    for ($col = 1; $col <= $boardSize; $col++) {
        $cellColor = ($row + $col) % 2 == 0 ? 'white' : 'black';
        echo "<td style='width: 30px; height: 30px; background-color: $cellColor;'></td>";
    }

    echo "</tr>";
}

echo "</table>";
?>
