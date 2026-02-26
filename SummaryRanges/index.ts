function summaryRanges(nums: number[]): string[] {
  const result: string[] = [];

  if (nums.length == 0) {
    return result;
  }
  let start = nums[0];

  for (let i = 0; i < nums.length; i++) {
    if (i == nums.length - 1 || nums[i + 1] != nums[i] + 1) {
      if (start == nums[i]) {
        result.push(start.toString());
      } else {
        result.push(`${start}->${nums[i]}`);
        if (i < nums.length - 1) {
          start = nums[i + 1];
        }
      }
    }
  }
  return result;
}
