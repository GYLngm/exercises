<?php

function reverseSubArr(&$arr, $start, $end){
    if ($arr == null || count($arr) == 0) return;
    
    while($start < $end) {

        $temp = $arr[$start];
        $arr[$start] = $arr[$end];
        $arr[$end] = $temp;
        $start++;
        $end--;
    }
}

function rotateArray(&$nums, $k){
    // $arr1 = array_slice($nums, -$k);
    // $arr2 = array_slice($nums, 0, count($nums)-$k);
    // $nums = array_merge($arr1, $arr2);
    //print_r($nums);

    if ($k > count($nums))
        $k = $k % count($nums);

    reverseSubArr($nums, 0, count($nums)-1);
    reverseSubArr($nums, 0, $k-1);
    reverseSubArr($nums, $k, count($nums)-1);
}

$arr = [1,2,3,4,5,6,7];

rotateArray($arr, 3);

print_r($arr);