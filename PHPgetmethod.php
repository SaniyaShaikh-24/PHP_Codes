<form action="get1.php" method="get">
    Name:<input type="text" name="fname"/>
    <input type="submit"Value="visit"/>
</form>
<?php
$name = $_GET['fname'];
echo"Welcome ,$name";
?>