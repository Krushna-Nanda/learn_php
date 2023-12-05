<?php
// indexed array 

$number = array(
    array(1,2,3),
    array(4,5,6),
    array(7,9,8)
);

$length = count($number);

echo $length . "\n";
// for($i=0;$i<$length;$i++){

//     echo $number[$i]. "\n";
// }


echo $number[2][2] . "\n";


$associative = array("name" => "krushna","age"=>"20","occupation"=>"developer");

echo $associative["name"];

// for($i=0;$i<$length;$i++){

//     echo $associative[$i]. "\n";
// }

?>