
const input = [4,1,2,1,2];

var singleNumber = function(nums) {
    if (nums == undefined || nums.length == 0) return;
    
    nums.sort();

    for (let i = 0; i < nums.length; i += 2) {
        if ( nums[i] != nums[i+1] ) {
            return nums[i];
        }
    }
    
}

console.log(singleNumber(input));