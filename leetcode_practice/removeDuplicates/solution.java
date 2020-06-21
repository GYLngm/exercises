package removeDuplicates;

import java.util.Arrays;

class Solution {
    
    public static int removeDuplicates(int[] nums) {
        if(nums.length == 0 || nums.length == 1)
        {
            return nums.length;
        }

        Arrays.sort(nums);

        int p = 0;

        for(int i=1;i<nums.length-1;i++){
            if(nums[p] != nums[i]){
                p++;
                nums[p] = nums[i];
            }
        }
        return p+1;
    }
    
    public static void main(String[] args){

        int[] arr = {1,1,4,8,5,4,8,7,9,5,15,4,86,55};
        
        int len = removeDuplicates(arr);
        
        for(int i=0;i<len;i++){
            System.out.println(arr[i]);
        }

    }
}