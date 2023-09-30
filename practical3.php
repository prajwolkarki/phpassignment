<?php

function multiplyLists($list1, $list2) {
    if (count($list1) !== count($list2)) {
        return "Lists must have the same length.";
    }
    $result = array();
    for ($i = 0; $i < count($list1); $i++) {
        $result[] = $list1[$i] * $list2[$i];
    }
    return $result;
}


$list1 = array(1, 2, 3, 4, 5);
$list2 = array(6, 7, 8, 9, 10);

$result = multiplyLists($list1, $list2);

echo "Resulting list after multiplying corresponding elements: ";
print_r($result);
?>
