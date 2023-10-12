<?php
$servername="localhost";
$username="root";
$password="";
$db="ASDF";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
    die("Sorry!!! Connection failed".mysqli_connect_error());
}
else {
    echo"Congratulation!!! Connection Success";
}
?>
