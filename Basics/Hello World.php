<?php
# Public PHP Examles
# Created by: Wesley De Groot
# Website:    http://www.wdgp.nl
# Free For Learning, Not supposed for Resale.
# Free For PERSONAL use, do not copy-paste without informing me.
# Need Information?, Have an idea?, have a code? (your information will be published)
# Contact: PHPExamle@wdgp.nl
# Thanks, and have fun with learning PHP


#Basic Hello World Different Ways.

$helloworld = array("Hello", "World");

function helloworld()
{
    return "Hello World<hr>";
}

function _helloworld()
{
    echo "Hello World<hr>";
}

echo "Hello World.<hr>";

print "Hello World.<hr>";

echo sprintf("%s%s<hr>", $helloworld[0], $helloworld[1]);

echo implode(" ", $helloworld) . "<hr>";

echo helloworld();

_helloworld();

?>