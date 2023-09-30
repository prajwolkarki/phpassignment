<?php
function testNumber($number) {
    $result = ($number > 30) ? "Greater than 30" : (($number > 20) ? "Greater than 20" : (($number > 10) ? "Greater than 10" : "Not greater than 10"));
    return $result;
}

$number1 = 5;
$number2 = 15;
$number3 = 35;
echo "Number 1: " . testNumber($number1) . "\n";
echo "Number 3: " . testNumber($number2) . "\n";
echo "Number 4: " . testNumber($number3) . "\n";
?>