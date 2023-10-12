<?php
$num=44 ;
$t=$num;
$revnum=0;
do{
    $revnum=($revnum*10)+($num%10);
    $num=(int)($num/10);
}
while($num>0);
if($t==$revnum)
echo"Palindrome";

echo"not palindrome";

?>