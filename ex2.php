<?php

$i = 1;
$j = 0;
$array = array();

while($i <= 20){
    $rand = rand(0, 5);
    
    if($rand == 3){
        $j++;
    };

    array_push($array, $rand);
    $i++;
};

var_dump($array);
echo("O número 3 aparece " . $j . " vezes");

?>