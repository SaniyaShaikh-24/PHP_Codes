<?php
setcookie("Cart","Kurti");
?>
<html>
    <body>
        <?php
if(!isset ($_COOKIE ["Cart"])){
    echo "Sorry Cookie is not found!!";
}else{
    echo "<br/>Cookie Value is : ".$_COOKIE["Cart"]; 
}
?>
  </body>
  </html>