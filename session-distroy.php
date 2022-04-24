<?php
//it is like  a logout page .
//start the session.
session_start();
//remove all session variable
session_unset();
//distroy the session
session_destroy();
echo "you have logout";
?>