<?php

$nums = [1,1,4,8,5,4,8,7,9,5,15,4,86,55];


function removeDuplicates ( &$nums ) 
{
    $index = 0;
    sort($nums);
    for ($cur=1;$cur<count($nums)-1;$cur++){
        if ($nums[$index] != $nums[$cur])
        {
            $index++;
            $nums[$index] = $nums[$cur];
        }
    }

    return $index+1;
}

$len = removeDuplicates($nums);

for($i=0;$i<$len;$i++){
    echo $nums[$i]." ";
}