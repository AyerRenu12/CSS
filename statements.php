<?php

//if statement
$a=50;
if ($a<100)
{
    echo"$a is less than 100.";
}

//if...else statement
$num=100;
if ($num%2==0)
{
    echo"$num is even number.";
}
else
{
    echo"$num is odd number.";
}

//if...elseif..else statements
$numb=80;
if($numb>90)
{
    echo"A+";
}
elseif($numb>80&&$numb<90)
{
    echo"A";
}
elseif($numb>70&&$numb<=80)
{
    echo"B+";
}
else
{
    echo"pass";
}

//switch statement
$grade='B';
switch($grade)
{
case 'A':
echo"Excellent";
break;
case'B':
echo'well done';
break;
case'C':
echo"you passed";
break;
case'F':
echo"failed";
break;
default:
echo"invalid grade";
}

?>