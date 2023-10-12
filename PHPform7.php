<?php
function reverse($number)
{
    /*writes number into the string */
    $num=(string)$number;
    /*reverse the string*/ 
    $revstr=strrev($num);
    /*writes the string into int*/
    $reverse=(int)$revstr;
    return $reverse;
} 
 echo reverse(123456789);
 ?>