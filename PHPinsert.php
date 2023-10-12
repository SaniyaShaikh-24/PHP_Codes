<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password=" ";
$dbname="mydb";
$conn=new mysqli($servername , $username,$password,$dbname);
if(!$conn){
    die ("Connection failed : ".$conn_>connect_error());
}
echo "Connected successfully";
echo "<br>";
$id= "17";
$name= "Saniya Shaikh";
$salary="60000";
//$sql="INSERT INFO 'emps'('id','name','salary')VALUES ('$id','$name','$salary')";
$sql="INSERT INTO `Database` (`ABC`, `PQR`, `SSS`) VALUES ('1234567', '12345', '12345678')";
$result=Mysqli_query($conn,$sql);
if($result)
{
    echo"The record has been inserted successfully ";
}else{
   echo "The record was not inserted successfully". Mysqli_error($conn);
}
MySQLi_close($conn);
?>