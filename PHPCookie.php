<html>
<body>
    <?php
if(!isset ($_COOKIE ["user"])){
    echo "Sorry Cookie is not found!!";
}else{
    echo "<br/>Cookie Value is : ".$_COOKIE["user"]; 
}
?>
  </body>
  </html>