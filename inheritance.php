<?php
 class Employee
 {
     //properties of class
     public $name;
     public $age;
     public $salary;
     function __construct($n,$a,$s)// variables
     {
         //assigning
         $this->name=$n;
         $this->age=$a;
         $this->salary=$s;
     }
     //for display
     function info()
     {
         echo"<h3> Employee profile</h3>";
         echo "Employee name:".$this->name."<br>";
         echo "Employee age:".$this->age."<br>";
         echo "Employee salary:".$this->salary."<br>";
     }
 }
 //derived class
class Manager extends Employee
{
    //for display
function info()
     {
         echo"<h3> Manager profile</h3>";
         echo "Manager name:".$this->name."<br>";
         echo "Manager age:".$this->age."<br>";
         echo "Manager salary:".$this->salary."<br>";
     }

}
//object for class Employee
$e1=new Employee("Ram",25,2500); // values
//object for class manager
$e2=new Manager("Hari",30,4500); // values

//function call
$e1->info();
$e2->info();
?>