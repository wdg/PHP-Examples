<?php

$explodeMe = "hello,this,will,be,transformed,into,an,array,couse,of,explode"; //the string what is needed to explode.

$explodeArray = explode(",", $explodeMe); // Each , is a new array value

print_r($explodeArray); //Print the "Array"

?>