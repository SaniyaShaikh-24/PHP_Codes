<?php
error_reporting(0);
require_once "PHPconn.php";
// $sql="CREATE TABLE "mytable1";
// $sql="CREATE TABLE `asdf`.`mytable1` ( `Id` INT 2 , `Username` INT 401 , `Address` 122)";
$sql="INSERT INTO `mytable1` (`Id`, `Username`, `Address`) VALUES ('121', 'Gairathi', '118,Garden')";

//$sql="INSERT INTO `mytable1` (`Id`, `Username`, `Address`) VALUES ('2', '401', '122'),('3', '402', '123')";
// $conn=mysqli_connect($host,$user,$pass,$db) 
if(!mysqli_query ($conn,$sql)){
 echo"record Created Successfully";
}
else{
 die("record corrupted");
 }
 mysqli_close($conn);
 ?>
