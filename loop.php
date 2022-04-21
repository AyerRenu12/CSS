<?php
//for loop
for($x=0;$x<=10;$x++)
{
    echo"$x";
}

//while loop
$a=5;//initialization
while($a<=20)//condition
{
    echo"$a";
    $a++;//increment
}

//do...while loop
$z=1;//initialization
do
{
    echo$z;
    $z++;//increment
}
while($z<5);//condition

//foreach loop
$colors=array("blue","green","gray");
foreach($colors as $value)
{
    // echo"$value";
    echo 'hello';
}
?>