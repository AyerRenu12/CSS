<?php
$cookie_name = "user";
$cookie_value = "root";
//to set cookie
setcookie($cookie_name, $cookie_value,time()+86400,"/");
 echo "the cookie is set";

//to delete cookie
setcookie($cookie_name,$cookie_value,time()-3600);
 echo"cookie is deleted"; 
?>