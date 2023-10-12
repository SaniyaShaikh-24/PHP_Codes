<html>
<body>
<form method="post">Enter the year:<input type="text"name="year">
   <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php
if($_POST)
{
  //GET THE YEAR
  $year=$_POST['year'];
  //CHECK IF ENTERED VALUE IS A NUMBER
  if(!is_numeric($year))
  {
    echo "Strings not allowed,input should be a number";
    return;
  }
//multiple conditions to check the leap year
if( (0==$year%4) and (0!=$year%100) or (0==$year%400) )
{
    echo "$year is a leap year";
}
else 
{
    echo "$year is not leap year";

}
}
?>