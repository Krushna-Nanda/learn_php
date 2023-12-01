<?php

$myname ="nandu bhide";


function myfun($name){
$greet = $name;
    echo "welcome $name\n";
    global $myname;
    echo "my real name is $myname";
}

myfun("krushna");



?>