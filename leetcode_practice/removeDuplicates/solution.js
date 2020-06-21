
var arr = [1,1,4,8,5,4,8,7,9,5,15,4,86,55];

var removeDuplicates = function(nums){
    if ( nums.length == 0 || nums.length == 1) return nums.length;
    nums.sort();
    var index = 0;
    for(let cur=1;cur<nums.length-1;cur++){
        if ( nums[index] != nums[cur] ){
            index++;
            nums[index] = nums[cur];
        }
    }
    return index+1;
}

var len = removeDuplicates(arr);

for(let i=0;i<len;i++){
    console.log(arr[i]);
}