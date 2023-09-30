<?php

function sumOfDigits($number) {
    $numberStr = (string)$number;
    $sum = 0;
    for ($i = 0; $i < strlen($numberStr); $i++) {
        $sum += (int)$numberStr[$i];
    }
    return $sum;
}
$number = 541; 
$result = sumOfDigits($number);
echo "The sum of the digits of $number is: $result";
?>