<?php
function swapNumber($a,$b) {
    echo "Before swapping:\n";
    echo "a = $a\n";
    echo "b = $b\n";

    $temp = $a;
    $a = $b;
    $b = $temp;
    
    echo "After swapping:\n";
    echo "a = $a\n";
    echo "b = $b\n";
}

swapNumber(10,20);
?>

