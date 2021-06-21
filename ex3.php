<?php

$array = array();
$menor = 0;
$maior = 10;

for($i = 1; $i <= 5; $i++){
    $rand = rand(0, 10);
}

foreach($array as $value){
    if($value > $menor){
        $menor = $value;
    }

    if($value < $maior){
        $maior = $value;
    }
}

echo ("Menor elemento: " . $menor . "<br>");
echo ("Maior elemento: " . $maior);

?>