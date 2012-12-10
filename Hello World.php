<?php

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