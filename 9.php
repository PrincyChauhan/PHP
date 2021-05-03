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

        <input type="text" placeholder="Enter yout emaild" name="email">
        <input type="submit" value="Submit" name="submit">
    </form>

</body>

</html>

<?php

if (isset($_POST['submit'])) {

    $email = $_POST["email"];

    $reg = "/^([a-z0-9\+\-]+)(\.[a-z0-9\+\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
    if (preg_match($reg, $email)) {

        echo "<h1>Valid email address.</h1>";
    } else {

        echo "<h1>Invalid email address.</h1>";
    }
}