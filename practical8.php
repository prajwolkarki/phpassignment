<?php
function isArmstrongNumber($number) {
    $number_str = (string)$number;
    $num_digits = strlen($number_str);
    $sum = 0;
    for ($i = 0; $i < $num_digits; $i++) {
        $digit = (int)$number_str[$i];
        $sum += pow($digit, $num_digits);
    }
    if ($sum === $number) {
        return true; 
    } else {
        return false; 
    }
}

$number = 153; 
if (isArmstrongNumber($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>