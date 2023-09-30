<?php
function calculateFactorial($number) {
    if ($number < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($number == 0 || $number == 1) {
        return 1;
    } else {
        $factorial = 1;
        for ($i = 2; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}
$number = 5;
$factorial = calculateFactorial($number);
echo "Factorial of $number is: $factorial";
?>
