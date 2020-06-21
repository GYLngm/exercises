<?php

function maxProfit($prices){
    if(count($prices) < 1 || count($prices) > 3*pow(10,4)) return 0;
    
    $profit = 0;
    
    for($i=0;$i<count($prices);$i++){
        if ($prices[$i+1] || ($prices[$i]>=0 && $prices[$i] <= pow(10,4))) {

            if ($prices[$i+1] > $prices[$i]){
                $profit += $prices[$i+1]-$prices[$i];
            }
        }
    }
    return $profit;
}

$arr = [7,1,5,3,6,4];

$profit = maxProfit($arr);

print_r($profit);