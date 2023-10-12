<html>
<?php
/*This will give an error .Note the output 
*above which is before the header()
call*/
header('location:http://www.example.com/');
exit;
?>