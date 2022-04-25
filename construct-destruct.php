<?php
class Fruit
{
    public $name;
//constructor 
    function __construct($name)
    {
        $this->name=$name;
    }
    
    //destructor
    function  __destruct()
    {
        echo "distroy evrything";
    }
}


$apple=new Fruit("apple");//apple for set name 
$apple->color="red";
echo $apple->color;
$mango=new Fruit ("mango");
$mango->color="yellow";
echo $mango->color;
?>