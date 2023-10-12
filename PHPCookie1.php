<?php
setcookie("BOOK","PHP",time()+(86400*2));
?>
<html>
<body>
    <?php
if(!isset ($_COOKIE ["BOOK"])){
    echo "Sorry Cookie is not found!!";
}else{
    echo "<br/>Cookie Value is : ".$_COOKIE["BOOK"]; 
}
?>
  </body>
  </html>