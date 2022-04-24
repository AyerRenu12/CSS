<?php
//start a session and get the data of previous page session.php
session_start();

if(isset ($_SESSION["username"]))
{
echo "welcome  " .  $_SESSION["username"];
echo"<br>your favorite category is:".$_SESSION["favcat"];
}
else 
{
    echo "please login to continue";
}
?>