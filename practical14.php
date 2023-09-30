<?php
$text = "patanacademy";
$characterToCount = 'a';
$count = 0;
for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] === $characterToCount) {
        $count++;
    }
}
echo "The character '$characterToCount' appears $count times in the text.";
?>
