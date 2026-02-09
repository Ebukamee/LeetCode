function longestPalindrome(s: string): string {
    if (s.length < 2) return s;

    let start = 0;
    let maxLen = 0;

    function expand(left: number, right: number) {
        while (left >= 0 && right < s.length && s[left] === s[right]) {
            left--;
            right++;
        }
        if (right - left - 1 > maxLen) {
            start = left + 1;
            maxLen = right - left - 1;
        }
    }

    for (let i = 0; i < s.length; i++) {
        expand(i, i);     
        expand(i, i + 1); 
    }

    return s.slice(start, start + maxLen);
}
