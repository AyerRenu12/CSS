<?php

$svr="localhost";
$uname="root";
$pass="";
//create connection
$conn=mysqli_connect($svr,$uname,$pass);
//check conn
if($conn)
{
    echo"connect successful.";
}
//create database
$sql="CREATE DATABASE myDB";
//check database
if(mysqli_query($conn,$sql))
{
    echo " Database connnect successfully";
}
else{
    echo"Error creating database".mysqli_error($conn);
}
?>