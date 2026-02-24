function moveZeroes(nums: number[]): void {
    let writeIndex = 0;

    for (let i = 0; i < nums.length; i++) {
        if (nums[i] !== 0) {
            nums[writeIndex] = nums[i];
            writeIndex++;
        }
    }

    while (writeIndex < nums.length) {
        nums[writeIndex] = 0;
        writeIndex++;
    }
}