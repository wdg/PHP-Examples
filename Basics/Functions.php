<?php
# Public PHP Examles
# Created by: Wesley De Groot
# Website:    http://www.wdgp.nl
# Free For Learning, Not supposed for Resale.
# Free For PERSONAL use, do not copy-paste without informing me.
# Need Information?, Have an idea?, have a code? (your information will be published)
# Contact: PHPExamle@wdgp.nl
# Thanks, and have fun with learning PHP

function first_function()
{
    return "this is cool";
}

echo first_function();

echo "<hr>";

function second_function($with,$some,$parameters)
{
    return sprintf("%s %s %s", $with, $some, $parameters);
}

echo second_function('cool','cooler','coolest');

echo "<hr>";

function third_function($bool=false)
{
    return $bool;
}

echo (third_function(false)) ? 'True':'False';
echo "<hr>";
echo (third_function(true)) ? 'True':'False';
echo "<hr>";

