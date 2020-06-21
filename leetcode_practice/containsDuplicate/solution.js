

const arr = [1,1,1,3,3,4,3,2,4,2];


var containsDuplicate = function(nums) {
    return (new Set(nums)).size != nums.nums;
};

console.log(containsDuplicate(arr));