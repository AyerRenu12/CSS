<?php
//public access modifier
class Employee
{
    public $name;
    function showname()
    {
        echo $this->name;
    }
}
$sam = new Employee();//creat object
$sam->name="sam";// sets name
echo $sam->name;


//private access modifier
class Game 
{
    private $name;
    function __construct($name)
    {
        $this->name=$name;
    }
    function showname()
    {
    echo $this->name;
    }
}
$game=new Game("chess");
//  echo $game->name; //it will not work if name is privated.
 echo $game->showname();

?>