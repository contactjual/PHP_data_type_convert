<?php

// PHP Casting means change data type

$a = 3; // int data type
$a = (string) $a; // converted to string data type

$b = "Hello"; // string data type
$b = (int) $b; // converted to int. return null value means empty.

$c = ['a']; // array
$c = (object) $c; // converted to object

$d = null; // null
$d = (string) $d; // converted to string



var_dump($d);







?>