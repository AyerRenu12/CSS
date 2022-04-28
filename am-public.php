<?php
//in public am , we can access properties  outside the class easily
 class A 
 {
     public $name;
     //construct functiion
     function __construct($n)
     {
         $this->name=$n;
     }
     //to display
     function info()
     {
         echo " Your name is:".$this->name;
     }
 }
 //object for clas A 
$a= new A ("Renu Ayer");
//overwrite
$a->name="Sam Chan";
//function call
$a->info();

?>