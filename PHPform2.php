
<html>
<body>
<form method="post">Enter a Number: <input type="number" name="number">
<input type="submit" value="Submit">
</form> 
</body>
</html>
<?php
if($_POST)
{
    $number= $_POST['number'];
    //divide entered number by 2 
    // if the reminder is 0 then the number is even otherwise the number is odd
    if(($number%2)==0){
        echo "$number is an Even Number";
    }else{
        echo "$number is an Odd Number";
    }
}
?>