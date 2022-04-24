<?php
//it is like login page.
//session is used to manage info. across different pages.

//verify userlogin
session_start();
$_SESSION["username"]="renu";
$_SESSION["favcat"]="books";
echo "session variables are set:";

?>