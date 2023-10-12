<form method="post">Enter the Number:<input type="text" name="num"/><br>
<button type="submit">Check </button>
</form>
<?php
if($_POST){
    //get the value form
     $num=$_POST['num'];
    //reversing the number 
    $reverse = strrev($num);
    //checking if the number and reverse is equal
    if($num == $reverse){
        echo "The number $num is Palindrome Number";
    }else{ 
        echo "The number $num is Not Palindrome Number";
    }
}
?>
