<?php

define ('HAVE_MYSQL', false);
define('PASSWORD', 'pass12345678');

function assertEquals($expected, $value)
{
 if ($expected !== $value) {
   echo "\nReceived \"" . $value . "\". Instead of expected value: \"" . $expected . "\".\n";
 }
// else echo ".";
}



function assertTrue($value)
{
 return assertEquals(true, $value);
}

function assertFalse($value)
{
 return assertEquals(false, $value);
}

