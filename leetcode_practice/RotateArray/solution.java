package RotateArray;

import java.util.Arrays;
import java.util.stream.IntStream;

class Solution {
    
    public static void reverseSubArr(int[] arr, int start, int end) {
        if (arr == null || arr.length == 0) 
            throw new IllegalArgumentException("Illegal argument!");

        while (start < end) {
            int temp = arr[start];
            arr[start] = arr[end];
            arr[end] = temp;
            start++;
            end--;
        }
    }

    public static void rotateArray(int[] nums, int k) {
        
        k = (k > nums.length)? k % nums.length : k;

        reverseSubArr(nums, 0, nums.length-1);
        reverseSubArr(nums, 0, k-1);
        reverseSubArr(nums, k, nums.length-1);
    }

    public static void main(String[] args){

        int[] arr = {1,2,3,4,5,6,7};

        rotateArray(arr, 3);

        for (int a : arr)
        {
            System.out.println(a+" ");
        }
        
    }
}