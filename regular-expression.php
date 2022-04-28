<?php
//preg_match() functiion
$str="Welcome to Vs code";
$pattern ="/in/";
echo preg_match($pattern,$str)."<br>";//if matches it returns 1 ,if not returns 0

//preg_match-all() //case sensitive
$str1="A box is big and this is so big,Big,BIG ";
$ptn="/big/i";//i makes case insensitive
echo preg_match_all($ptn,$str1)."<br>";

//preg_replace()
$str2="I love Dadeldhura";
$ptrn="/da deldhura/i";
$x="Ajayameru";
echo preg_replace($ptrn,$x ,$str2)."<br>";

// "/[abc]/" pattern

$str3="The cow is national animal";
$ptr="/[abc]/";
 preg_match_all($ptr,$str3,$arr);
 print_r($arr);
 echo "<br>";

 //"/[^ab]/" pattern
 $strg="This is a animal";
 $ptr1="/[^abc]/";
 preg_match_all($ptr1,$strg,$arr);
 print_r($arr);
 echo"<br>";

// "/[a-j]/"  pattern
$stra="This is a dog";
$ptrb="/[a-j]/";
//$ptrb="/[^a-j]/"; //excluding a-j
preg_match_all($ptrb,$stra,$arr);
print_r($arr);
echo "<br>";

// "/[0-9]/"pattern
$strna="1this 87is a 25cat6";
$ptrc="/[0-9]/";
preg_match_all($ptrc,$strna,$arr);
print_r($arr);
echo "<br>";

//  "/[0-9]*/"
// * shows empty positions and that positions too in which number is located
$strnx="1this 87is a 25cat6";
$ptry="/[0-9]*/";
preg_match_all($ptry,$strnx,$arr);
print_r($arr);
echo"<br>";

// "/[a-zA-Z0-9]/"
$strx="1This 87Is 54a75 25cAt6";
$ptrz="/[a-jA-z0-9]/";
preg_match_all($ptrz,$strx,$arr);
print_r($arr);


?>