<?php
session_start();
?>
<html>

<body>
    <?php
    $_SESSION["user"] = "Princy";
    echo "Hello ",$_SESSION["user"], "<br/>";
    ?>
</body>

</html>