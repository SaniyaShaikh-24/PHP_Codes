<?php
$servername="localhost";
$username="root";
$password="";
$db="MyDb";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
    die ("Sorry Ur Connection failed".mysqli_connect_error());

}
else
{
    echo "Congo!! Ur connection was Success";
}
?>