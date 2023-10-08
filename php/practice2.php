<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Registration</h1>
<form action="" method="post">
Enter number one: <input type="number" name="num1" id=""><br>
   Enter number two: <input type="number" name="num2" id=""><br>
   <input type="submit" name="submit" value="Add">
</form>
   <?php
if(isset($_POST['submit'])){
   $sum = $_POST['num1']+ $_POST['num2'];
   echo $sum."\n";
   echo $_POST['submit'];
}

?>
</body>
</html>