<!DOCTYPE html>
<html>
<title> static variable </title>  
<?php
function static_var()
{
    static $num1=3;
 $num2=6;
$num1++;
$num2++;
echo"static: ".$num1."</br>";
echo"non-static: ".$num2."</br>";
}
static_var();
static_var();
static_var();
static_var();

?>
</body>
</html>
