<?php
$x = 200;

function myfunc($a,$b,$c){

    global $x;

    // return $a+$b +$c+$x;

    return "krushna";

}



$result = myfunc(10,20,30);

echo $result;

?>