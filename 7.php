<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    
    <input type="text" name="fname" placeholder="Enter your First name"><br>
    <input type="text" name="lname" placeholder="Enter your Last name"><br>
    <input type="submit" value="Submit" name="submit"><br>

    </form>
</body>
</html>


<?php

if (isset($_POST['submit'])) {

    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];

    echo " Your full name is $firstname  $lastname";
}

?>