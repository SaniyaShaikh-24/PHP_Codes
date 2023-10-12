<?php
session_start();
?>
<html>
    <body>
        <?php
$_SESSION ["user"]="Saniya";
    echo "Session information are set successfully.<br/>";
    ?>
    <a href="PHPsession2.php">VISIT NEXT PAGE </a>
  </body>
  </html>