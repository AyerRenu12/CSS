<?php 

//boolean datatype of php
$ismarried = true;
$isyoung=false;

echo $ismarried;
echo $isyoung;

//integer datatype
$age=21;
$temparature=-70;
echo $age;
echo $temparature;

//float datatype
$price=25.75;
echo $price;

//string datatype
$name="Renu";
$password='12345';
echo $name;
echo $password;

//array 
$info = array(1,"Dev",'Renu',50);
echo $info[3];
//var_dump is the function which helps to identify the datatype of variable.
echo var_dump($info);

//object in php
class bike {

}
$obj=new bike();
echo var_dump($obj);

//null datatype
$adress;
echo var_dump($adress);

//constants of php
define("PI",3.14);
echo PI;

const gravity=9.8;
echo gravity;

?>