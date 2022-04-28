<?php
// 1.we can access protected properties by using constructor.
class Base 
{
    protected $name;
      function __construct($n)
     {
         $this->name=$n;
     }
      function show()
     {
         echo "your name is :".$this->name;
     }
}

$x=new Base ("Dev");
//$x->name="Dev";
$x->show();

//2. we can also use protected properties by using derived class.

class A 
{
    protected $name;
    public function __constrct($nam)
    {
        $this->name=$nam;
    }
    protected function get()
    {
        echo "your name is :".$this->name;
    }

}

class derived extends A 
{
    public function get()
    {
        echo "your name is :".$this->name;
    }
}

$name=  new derived("ram");
$name->get();





?>