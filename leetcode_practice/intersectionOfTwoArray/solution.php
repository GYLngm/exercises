<?php

    $nums1 = [1, 2, 2, 1];
    $nums2 = [2, 2];


    function intersect($nums1, $nums2) {
        
        sort($nums1);
        sort($nums2);

        $res = [];

        $i = 0;
        $j = 0;
        while ($i < count($nums1) && $j < count($nums2)) {
            if ($nums1[$i] < $nums2[$j]) {
                $i++;
            } elseif ($nums2[$j] < $nums1[$i]) {
                $j++;
            } else {
                $res[] = $nums1[$i];
                $i++;
                $j++;
            }
        }

        return $res;
    }

    print_r(intersect($nums1, $nums2));