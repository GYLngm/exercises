package singleNumber;


class Solution {
    
    public static int singleNumber(int[] nums) {
        if (nums == null || nums.length == 0) return 0;

        for (int i = 0; i < nums.length; i+=2) {
            if( nums[i] != nums[i+1] ) {
                return nums[i];
            }
        }
        
        return 0;
    }

    public static void main(String[] args){

        int[] arr = {4,1,2,1,2};

        System.out.println(singleNumber(arr));
        
    }
}