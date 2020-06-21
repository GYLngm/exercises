package containsDuplicate;

import java.util.*;
import java.util.stream.Collectors;

public class solution {
    
    public static boolean containsDuplicate(int[] nums){

        Set<Integer> uniqueSet = Arrays.stream(nums).boxed().collect(Collectors.toSet());
        
        return uniqueSet.size() != nums.length;
    }

    public static void main(String[] args) {

        int[] arr = new int[] {0};

        System.out.println(containsDuplicate(arr));
    }
}