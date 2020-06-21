
const nums = [1,2,3,4,5,6,7];

var rotateArray_low = function (nums, k) {
    for (let i = 0; i < k; i++){
        let a = nums[nums.length-1];
        let j = nums.length-1;
        while (j > 0) {
            nums[j] = nums[j-1];
            j--;
        }
        nums[0] = a;
    }
};

//rotateArray_low(nums, 3)
//console.log("Low performance: ");
//console.log(nums);

var reverseArr = function(nums, start, end) {
    if (nums == undefined || nums.length == 0) return;

    while (start < end) {
        let tmp = nums[start];
        nums[start] = nums[end];
        nums[end] = tmp;

        start++;
        end--;
    }
};

var rotateArray_high = function(nums, k) {
    /*const arr_back = nums.slice(nums.length-k, nums.length);
    const arr_front = nums.slice(0, nums.length-k);
    nums = arr_back.concat(arr_front);*/

    k = (k>nums.length)?(k%nums.length):k;

    reverseArr(nums, 0, nums.length-1);
    reverseArr(nums, 0, k-1);
    reverseArr(nums, k, nums.length-1);
}

rotateArray_high(nums, 3)
console.log("High performance: ");
console.log(nums);