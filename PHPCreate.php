<?php
error_reporting (0);
require_once"PHPConnect.php";
$sql="CREATE DATABASE ABC";
if(mysqli_query($conn,$sql))
{
 echo "Congo!! Ur database was created successfully";
}
else
{
    die("Sorry!! Ur database corrupted".mysqli_error($conn));
}
mysqli_close($conn);
?>