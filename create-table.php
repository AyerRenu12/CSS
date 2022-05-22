<?php

$servername="localhost";
$username="root";
$password="";
$dbname="myDB";

//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check conn
if($conn)
{
    $sql="CREATE TABLE users
    (
        Id int,
        Name varchar(20),
        Address varchar(30)
        )";
        

if(mysqli_query($conn,$sql))
{
    echo "Table create sucessfully";
}
else{
    echo"error creating table".mysqli_error();
}
}
else{
    die("connection failed".mysqli_connect_error());
}


?>
