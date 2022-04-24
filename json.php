<?php

//json_encode to convert array to string
$age=array("Renu"=>"20","Sharada"=>"21","Sameeer"=>"23");
echo var_dump($age)."<br>";
// echo var_dump(json_encode($age));

//json_decode to convert object into array , object retrun
$jsonresult = json_encode($age);
$backtoasso = json_decode($jsonresult);

//if we write true json decode will return array
$backtoasso = json_decode($jsonresult,true);
echo var_dump($backtoasso);

?>