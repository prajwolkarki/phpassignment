<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" name="user" id="name" placeholder="Enter your name">
        <input type="submit" value="Submit" name="submit">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["user"];
echo "Your name is ".$name;
}
?>
</body>
</html>