<!DOCTYPE html>
<html>
    <head>
        <title> To check given number is Palindrome Number or Not </title>
    </head>
    <body>
    <?php
$stdin=fopen("php://stdin","r");
echo "Enter the number : ";
$num=trim(fgets($stdin));
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
fclose($stdin);
?>
</body>
</html>