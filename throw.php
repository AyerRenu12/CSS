<?php
function divide ($x,$y)
{
    if($y==0)
     {
     throw new Exception("Division by zero");//throw returns error
}
return $x/$y;
}
try//it contains error from function
{
    echo divide(5,0);
}
catch (exception $e)//it display error msg if error occurs
{
echo "unable to divide <br>";//error msg
}
finally 
{
    echo"Thanks for visiting";
}
?>