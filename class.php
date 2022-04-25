<?php
//class for fruits
class Fruit {
public $name;
 public $color;

// function set_name ($name)
function set_color($name)
{
    // $this->name=$name;
    $this->color=$name;
}
}
//object for class
$apple = new Fruit();
 $apple->set_color("red");

 $apple->set_name("apple");
// echo $apple->name;
echo $apple->color;

$banana = new Fruit();
$banana->set_color("yellow");
echo $banana->color;

//we can access without function
$apple->color="red";
$banana->color="yellow";

?>