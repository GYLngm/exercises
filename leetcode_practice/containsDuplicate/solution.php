<?php

$arr = [1,1,1,3,3,4,3,2,4,2];

function containsDuplicate ($nums) {
    return (sizeof(array_unique($nums)) != sizeof($nums));
}

echo containsDuplicate($arr);