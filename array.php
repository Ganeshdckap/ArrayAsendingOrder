<?php

$input = [1, 4, 2];
$store =[];


// array_push($store, $input);
// print_r($input);

for ($i =0; $i<count($input)-1; $i++){
    // print_r($input);
    if ($input[$i]< $input[$i + 1]) {
$a = $input[$i];
$input[$i] = $input[$i+1];
$input[$i+1] =$a;


array_push($store, $input);
print_r($input);
   
    }
   
}


?>
