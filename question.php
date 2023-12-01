<?php

/*

$no = 125;

for ($i=2;$i<$no;$i++){


    if($no%$i==0){
        echo "its not a prime no";
        exit;
    }
}

echo "it is a prime no";

*/


// to find out first 20 fibonacci series in php

$first = 0;
$second = 1;
$next = 0;
echo "$first , $second , ";
for ($i=1;$i<=20-2;$i++){

    $next = $first + $second;

    echo "$next ,";

    $first = $second;
    $second = $next;


}

?>



