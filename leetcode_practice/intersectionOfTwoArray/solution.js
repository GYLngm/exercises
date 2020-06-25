
const nums1 = [1,2,3];
const nums2 = [1,1];

var intersectionArray = function (nums1, nums2) {

    nums1.sort();
    nums2.sort();

    let res = [];
    let i = 0, j = 0;

    while (i < nums1.length && j < nums2.length) {
        if (nums1[i] < nums2[j]) {
            i++;
        }
        else if (nums2[j] < nums1[i]) {
            j++;
        }
        else {
            res.push(nums1[i]);
            i++;
            j++;
        }
    }
    return res;
}

console.log(intersectionArray(nums1,nums2));