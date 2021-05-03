<!DOCTYPE html>
<html lang="en">

<head>
    <title>GET method</title>
</head>

<body>
    <?php
    if (isset($_GET["name"])) {
        echo "<p>Hi, " . $_GET["name"] . "</p>";
    }
    ?>
    <form method="get" action="">
        <label for="inputName">Name:</label>
        <input type="text" name="name" id="inputName">
        <input type="submit" value="Submit">
    </form>
</body>

</html>