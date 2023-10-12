<!DOCTYPE html>
<html>
    <head>
        <title> To check the factorial of a given number </title>
    </head>
    <body>
    <?php

//echo "Enter the number : ";
$num=6;
for($counter=1,$fact=1;$counter<=$num;$counter++)
$fact=$fact*$counter;
echo"Factorial of the number".$fact;
?>
</body>
</html>