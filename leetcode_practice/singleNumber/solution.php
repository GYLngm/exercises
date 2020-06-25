<?php

    $arr = [4,1,2,1,2];

    function singleNumber($nums) {
        if ($nums == null || count($nums) == 0 ) return;
        sort($nums);
        
        for ($i = 0; $i< count($nums); $i +=2){
            if ($nums[$i] != $nums[$i+1])
                return $nums[$i];
        }
    }

    echo singleNumber($arr);