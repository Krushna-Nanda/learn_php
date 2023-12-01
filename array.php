<?php

$fruit = array("apple", "orange", "grape", "banana", "plum");
var_dump(($fruit));


$str = "krushna chandra nanda";
echo strlen($str) , "\n";
echo str_word_count($str) , "\n";

echo strrev($str),"\n";
echo strpos($str,"chandra") . "\n"; // it return the index
echo strpos($str,"z") . "\n"; // it return nothing

echo str_replace("nanda","nandu",$str) . "\n";

/*

here i m hoing to discuss bout constant



define ("pi",3.32);
echo pi;

*/


?>
