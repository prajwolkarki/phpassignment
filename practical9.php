<?php
function isPrime($num) {
if ($num <= 1) {
return false;
}
if ($num <= 3) {
return true;
}
if ($num % 2 == 0 || $num % 3 == 0) {
return false;
}
$i = 5;
while ($i * $i <= $num) {
if ($num % $i == 0 || $num % ($i + 2) == 0) {
return false;
}
$i += 6;
}
return true;
}
$sum = 0;
for ($i = 2; $i < 200; $i++) {
if (isPrime($i)) {
$sum += $i;
}
}
echo "The sum of prime numbers less than 200 is: $sum\n";
?>