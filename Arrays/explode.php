<?php
# Public PHP Examles
# Created by: Wesley De Groot
# Website:    http://www.wdgp.nl
# Free For Learning, Not supposed for Resale.
# Free For PERSONAL use, do not copy-paste without informing me.
# Need Information?, Have an idea?, have a code? (your information will be published)
# Contact: PHPExamle@wdgp.nl
# Thanks, and have fun with learning PHP

$explodeMe = "hello,this,will,be,transformed,into,an,array,couse,of,explode"; //the string what is needed to explode.

$explodeArray = explode(",", $explodeMe); // Each , is a new array value

print_r($explodeArray); //Print the "Array"

?>